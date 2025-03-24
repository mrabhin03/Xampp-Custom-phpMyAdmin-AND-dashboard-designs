const tableSelector=document.getElementById("table");
const databaseSelector=document.getElementById("database");
var tableActive=false;
function changedValue() {

  var xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    "Database/ShowTables.php?Database=" + databaseSelector.value,
    true
  );
  xhr.onload = function () {
    if (xhr.status >= 200 && xhr.status < 300) {
        if(xhr.responseText.length==0){
            tableActive=false;
            tableSelector.innerHTML ="<option disabled selected>No Tables Found</option>";
            document.getElementById("output").innerHTML ="No Data";
        }else{
            tableActive=true;
            tableSelector.innerHTML = xhr.responseText;
        tableValues()
        }
    } else {
      console.error("Error:", xhr.statusText);
    }
  };

  xhr.onerror = function () {
    console.error("Network Error");
  };
  xhr.send();
}

function tableValues(){
    if(!tableActive){
        document.getElementById("output").innerHTML ="No Data";
        return
    }
    Tablename=tableSelector.value;

    var xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    "Database/ShowData.php?Table=" + Tablename+"&database="+databaseSelector.value,
    true
  );
  xhr.onload = function () {
    if (xhr.status >= 200 && xhr.status < 300) {
        document.getElementById("output").innerHTML = xhr.responseText;
    } else {
      console.error("Error:", xhr.statusText);
    }
  };

  xhr.onerror = function () {
    console.error("Network Error");
  };
  xhr.send();
}
changedValue()
