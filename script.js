let checkdomain = document.getElementById('checkdomain');

// console.log(checkdomain);
document.getElementById('checkdomain').addEventListener("click", function(e) {
    e.preventDefault();
    let data = document.getElementById('domainCheck').value;
    console.log(JSON.stringify(data));
    // document.getElementById("result").innerHTML = "Hello World";
});

// fetch("checkdomain.php", {
//     method: "POST",
//     body: JSON.stringify(data),
//     headers: {
//         "Content-Type": "application/json; charset=UTF-8"
//     }
// })
// .then((response) => response.json())
// .then((data) => console.log(data))