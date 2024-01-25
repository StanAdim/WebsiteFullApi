import type { UseFetchOptions } from "nuxt/app"

export const useApiFetch = (path : string, options: UseFetchOptions <any>= {}) => {
  let headers:any = {}
  const token = useCookie('XSRF-TOKEN');
  if(token.value){
    headers['X-XSRF-TOKEN'] = token.value as string
  }
  return useFetch('http://localhost:3002' + path, {
    credentials:'include',
    watch:false,
    ...options,
    headers: {
      ...headers,
      ...options?.headers
    }
  })
}
