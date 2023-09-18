const checkdomain = document.getElementById('btn_checkdomain');
const checkReset = document.getElementById('btn_reset');
const data = document.getElementById('domainCheck');
const result = document.getElementById("result");

// console.log(checkdomain);
document.getElementById('btn_checkdomain').addEventListener("click", function(e) {
    e.preventDefault();
    let domain = data.value;

    if(isValidURL(domain)){

        
        fetch("checkdomain.php", {
            method: "POST",
            body: JSON.stringify({
            'domain' : domain
            }),
            headers: {
                "Content-Type": "application/json; charset=UTF-8"
            }
        })
        .then((response) => {
            return response.json();
        })
        .then((response) => {
            result.style.backgroundColor = response.bg_color;
            result.innerHTML = response.message;
        })
        .then(() => result.style.display = 'block')
    }
    else {
        result.innerHTML = "Field is empty OR not valid URL, try with correct data :)";
        result.style.backgroundColor = 'orange';
        result.style.display = 'block';
    }
});

document.getElementById('btn_reset').addEventListener("click", function(e){
    e.preventDefault();
    data.value = '';
    result.innerHTML = "";
    result.style.display = 'none'
});

function isValidURL(domain) {
    if(/^[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)$/g.test(domain)) {
        return true;
     } else {
        return false;
     }
 }