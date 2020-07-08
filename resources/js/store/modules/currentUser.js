import axios from "axios";

const state = {
    user:{}
};
const getters ={};
const actions = {
    loginUser( {}, user){
        axios
        .post("/api/v1/user/login",{
            email: user.email,
            password: user.password
        })
        .then( response => {
            if( response.data.access_token){
                //guardar token
                localStorage.setItem(
                    "blog_token",
                    response.data.access_token
                )
            }
        })
    }
};
const mutations = {};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}