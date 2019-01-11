class AppStorage {

   storeToken(token) {
        localStorage.setItem('token', token);

    }
    storeUser(user) {
        localStorage.setItem('user', user);

    }

    store(user, token) {
        this.storeToken(token);
        this.storeUser(user);

    }

    //this will clear user and token from local storage
    clear(){
        localStorage.removeItem('token');
        localStorage.removeItem('user');
    }

    // get token from storage
    getToken(){
        return localStorage.getItem('token') ;
    }

    //get user from storage
    getUser(){
        return localStorage.getItem('user');
    }

}

export default  AppStorage = new AppStorage()