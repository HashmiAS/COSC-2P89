//ah18ai 6584957
//
function addItem(item){
console.log(window.location.search);
console.log( item);   
const urlParams = new URLSearchParams(window.location.search);
console.log(urlParams);



 if(localStorage.getItem(item) == null){
        localStorage.setItem(item, item)
        window.alert("Item added to your wishList")
    } else {
        window.alert(item + ' already in Wishlist')
    }
//var test = "<?php echo $_SESSION['loggedin']; ?>";
//
var sessionValue = '<%=Session["loggedin"]%>'

    console.log(sessionValue); 
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    xmlhttp.open("POST","store.php",true);
       // Must add this request header to XMLHttpRequest request for POST
     xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xmlhttp.send(item);
                           
      // console.log"still running";                               
          }






 
}

function removeItem(item){
    if(localStorage.getItem(item) != null){
        localStorage.removeItem(item)
        window.alert("Item removed from your wishList");
    } else {
        window.alert(item + ' not in Wishlist')
    }

}

function removeIndividualItem(){
var item = document.getElementById("name").innerHTML;

    if(localStorage.getItem(item) != null){
        localStorage.removeItem(item)
        window.alert("Item removed from your wishList");
    } else {
        window.alert(item + ' not in Wishlist')
    }
}


function hideIfInvalid() {
  var x = document.getElementById("name").innerHTML;
  console.log(x);
  var element = document.getElementById("name");

  if (!document.getElementById("name").innerHTML) {
  //console.log("testing")
  // removeWish.style.display = "none";
// addWish.style.display = "none";
//window.alert("This item doesn't exist sadly");  
}

var img = document.getElementById('image');
console.log(img);
 // if(!img.src || !img.src.length || img.src.length === 0)
 // {
   // alert("empty");
 // }   
}

function addIndividualItem(){

var item = document.getElementById("name").innerHTML;

 if(localStorage.getItem(item) == null){
        localStorage.setItem(item, item)
        window.alert("Item added to your wishList")
    } else {
        window.alert(item + ' already in Wishlist')
    }

}

function getProduct(){
       
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
console.log(urlParams);  
    //var product = "prod" + urlParams.get('id') +  ".prod";
var product = urlParams.get('id') + ".txt";
console.log(product);
    var txtFile = new XMLHttpRequest();
    txtFile.onreadystatechange = function()
    {
        if (txtFile.readyState === 4) {  // document is ready to parse.
            if (txtFile.status === 200) {  // file is found
            allText = txtFile.responseText; 
            lines = txtFile.responseText.split("\n");
document.getElementById("image").src = "data:image/jpg;base64," + lines[0];            
//document.getElementById("image").src =  lines[0]
            document.getElementById("name").innerHTML = lines[1];
            document.getElementById("price").innerHTML = lines[3];
            document.getElementById("description").innerHTML = lines[2];
            
            }
  }
}
txtFile.open("GET", product, true);
txtFile.send(null);

}

