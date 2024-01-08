const arr = [
    {name : "Harry", age : "18"},
    {name : "James", age : "21"},
    {name : "Steven", age : "23"}
]
console.log(arr);
arr.map((
    {['name']:_, ...rest}) =>{
     console.log(rest);   
    })