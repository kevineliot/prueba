import axios from "axios";

const state = {
    //token: localStorage.getItem('access_token') || null
   user:{}
};
const getters ={};
const actions = {
    getUser({commit}){
        axios.get("/gitkraken/prueba/public/api/current")
        .then(response=>{
            commit('setUser', response.data);
        });
    
    },
    loginUser({}, user){
        axios
        .post("/gitkraken/prueba/public/api/login",{
            email: user.email,
            password: user.password
        })
        .then(response =>{
             //console.log( response.data);
            if( response.data.access_token)
            {
                localStorage.setItem("blog_token",response.data.access_token)
            }
            window.location.replace("/gitkraken/prueba/public/home") 
        })
          
    },
    registerUser({}, user){
        axios
        .post("/gitkraken/prueba/public/api/register",{
            name: user.name,
            email: user.email,
            password: user.password
        })
        .then(response =>{
             //console.log( response.data);
            if( response.data.access_token)
            {
                localStorage.setItem("blog_token",response.data.access_token)
            }
            window.location.replace("/gitkraken/prueba/public/api/login")
        })
          
    },

    logoutUser(){
        //remove token
        localStorage.removeItem("blog_token");
        window.location.replace("/gitkraken/prueba/public/api/login")
    }
};

const mutations = {
    setUser(state,data){
        state.user = data;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}