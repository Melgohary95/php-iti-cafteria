let sendReq = ()=>{
    const catName = document.getElementById("newCategory").value;
    const categoriesList = document.getElementById("productCategory");
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let catInfo= this.responseText.split("-");

        let option = document.createElement("option");
        let optionText = document.createTextNode(catInfo[1]);
        option.appendChild(optionText);
        option.value=catInfo[0];
        categoriesList.appendChild(option);
      }
    };
    if(catName.length > 0)
    {
    xmlhttp.open("GET", "../../core/addCtegory.php?cat=" + catName, true);
    xmlhttp.send();
    }
}

let displayEdit=()=>{
        let x = document.getElementById("edit");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      
}

