function consumir_api(){
    var endpoint="https://jsonplaceholder.typicode.com/posts";

    fetch(endpoint)

    .then(function(response){
        return response.json();
    })

    .then(function(data){
        var menor=data[data.length-1];

        for (let  i= data.length-1; i >=0 ; i--) {
            if(data[i].id<menor.id){
                menor=data[i];
            }
        }

        document.getElementById("resul").innerHTML=
        `
        <h2>Nombre del post: ${menor.title}</h2>
        <h2>id del post: ${menor.id}</h2>
        `
    })
}