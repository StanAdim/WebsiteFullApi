
type User = {
    id:number,
    name: string,
    email:string
}
type Credential = {
    email:string,
    password:string,
}
type LoggedUser ={
    id:number,
    name:string,
    token:string,
    email:string,
    email_verified_at:string,
    created_at:string,
    updated_at:string,
}
type RegistrationInfo = {
    name: string;
    email: string;
    password: string;
    password_confirmation: string;
  }
  
export const useAuthStore = defineStore('auth', ()=> {
    const  user = ref<User | null>(null)
    const isLogin = computed(()=> !!user.value)

    //Fetch Logout
    async function fetchUser(){
        const {data,error} = await useApiFetch('/api/auth/user');
        user.value = data.value as LoggedUser
        return {
            data,error
        }
    }
    // Login
    async function login(credentials: Credential){
       await useApiFetch("/sanctum/csrf-cookie");
        const {data} = await useApiFetch('/api/auth/login',{
            method: 'POST',
            body : credentials
        });
        // await fetchUser();
        user.value = data.value as LoggedUser
        if (data.value.token){ navigateTo('/crm/dashboard');}

        return data;
    }
    //Logout
    async function logout(){
      const logout =  await useApiFetch('/api/auth/logout', {method: 'POST'});
        user.value = null;
        navigateTo('/auth/login')
        return logout
    }
    //Register
    async function register(userInfo : RegistrationInfo){
        await useApiFetch("/sanctum/csrf-cookie");
        const register = await useApiFetch("/api/auth/register", {
          method: "POST",
          body: userInfo,
        });
        await fetchUser();
        return register;
    }
    return {
        user,login,isLogin,logout,fetchUser,register
    }
}) 