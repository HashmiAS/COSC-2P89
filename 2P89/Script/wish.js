function removeItem(item){
    localStorage.removeItem(item.id);
    item.remove();
}

function allStorage(){
    var values = [],
    keys = Object.keys(localStorage),
    i = keys.length;

    while(i--){
        values.push(localStorage.getItem(i));
    }
    return values;
}

function loadWishlist(){
    var wishes = allStorage();
    var length = wishes.length;
    if(length == 0){
        console.log('Storage is empty');
    }
    for (i = 0; i < length; i++){
        var key = localStorage.key(i);
        var item = localStorage.getItem(key);
        console.log(key + item)
        var node = document.createElement('li');
        var textNode = document.createTextNode(item);
        node.appendChild(textNode);
        node.id = key;
        node.addEventListener('click', function(){
            var obj = event.target
            removeItem(obj);
        })
        document.getElementById('wishList').appendChild(node);
    }
}

window.addEventListener('load', function(){
    loadWishlist();
})


function save(){
   console.log("run");

   var response=document.getElementById("response");
   var data = 'data='+document.getElementById("data").value;
   var xmlhttp = new XMLHttpRequest();

	 
	   

	xmlhttp.open("POST","store.php",true);
       
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);





        console.log("run");
    }

