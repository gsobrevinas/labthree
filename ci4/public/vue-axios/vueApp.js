const url = "http://localhost/labthree/ci4/public/articles"

const { createApp } = Vue
      
createApp({    
  data() {
    return {
       
        results:[]
    }
},
    mounted() {
        axios.get(url).then(response => {
            this.results = response.data
        })
    }
          
        
  
  
}).mount('#app')