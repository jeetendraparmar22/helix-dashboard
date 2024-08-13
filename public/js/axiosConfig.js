axios.defaults.baseURL = "http://127.0.0.1:8000/api/";
axios.defaults.headers.common["Authorization"] = "abc";
axios.defaults.headers.post["Content-Type"] =
    "application/x-www-form-urlencoded";
