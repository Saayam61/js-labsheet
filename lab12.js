const arr = ["Ram", "Ashish", "Shyam", "Hari", "Gopal"];
console.log(arr);

let s = arr.filter((e) => {
    return e.startsWith('A');
});
console.log(s);
