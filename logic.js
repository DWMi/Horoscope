window.addEventListener("load", initSite);

const saveHoroscope = document.getElementById("saveHoro").addEventListener("click", addHoro),
    updateHoroscope = document.getElementById("updateHoro").addEventListener("click", updateHoro),
    deleteHoroscope = document.getElementById("deleteHoro").addEventListener("click", deleteHoro)


function initSite(){
 showHoro() 
};

function showHoro(){
    const url = "./API/viewHoroscope.php",
    method = "GET"

    makeRequest(url, method, undefined, function(dataInput){   
            document.getElementById("dispText").innerText = dataInput
    });
};


function addHoro(){
    const birthDate = document.getElementById("date").value,
        url = "./API/addHoroscope.php",
        method = "POST",
        formData = new FormData()
        formData.set("date", birthDate)
        makeRequest(url, method, formData, function(dataInput){
        if(dataInput === true){
            showHoro();
        }
    });
};      

function updateHoro(){
    const birthDate = document.getElementById("date").value,
        url = "./API/updateHoroscope.php",
        method = "POST",
        formData = new FormData()
        formData.set("date", birthDate)
        makeRequest(url, method, formData, function(dataInput){
        if(dataInput === true){
            showHoro();
        }
    });
};

function deleteHoro(){
    const method = "DELETE",
        url ="./API/deleteHoroscope.php"
        makeRequest(url, method, undefined, function(dataInput){
        delText(dataInput)
 
    });
};

const delText = (value) => {    
    if(value) {
        document.getElementById("dispText").innerText = "Stjärntecknet är borttaget!";
    }else{
        document.getElementById("dispText").innerText = "Stjärntecknet är REDAN borttaget!";       
    }
}


async function makeRequest(url, method, formData, callback) {

    try {
        let response = await fetch(url, {
                method: method,
                body: formData  
            })
            const data = await response.json()
             callback(data)
    }catch(error){
        console.log(error)
    }
}