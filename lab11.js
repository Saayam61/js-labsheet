const arr = ["Ram", "Shyam", "Hari", "Gopal"]
console.log(arr);
arr.sort((a, b) => a.localeCompare(b, {numeric : true}));
    console.log(arr);