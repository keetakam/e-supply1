const searchBar = document.querySelector("#search_bar");

searchBar.onkeyup =()=>{ 
    let searchTerm = searchBar.value;
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "client_search.php", true);
    xhr.onload = ()=>{
            console
        if(xhr.readyState === XMLHttpRequest.DONE){
        //    alert (xhr.status);

            if(xhr.status === 200){
                let data = xhr.response;
                document.querySelector("#tbody").innerHTML = data;

            }
        }

    }    

    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
    // console.log ("send from js");
}