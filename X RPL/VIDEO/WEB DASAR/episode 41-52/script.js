// alert("javascript");

// function tampil() {
//   document.getElementById("aku").innerHTML = "javascript";
// }

function tampil() {
  // document.querySelector("h1").innerHTML = "Belajar Javascript";
  // document.querySelector(".container").style.backgroundColor = "red";
  // document.querySelector("#para").style.fontSize = "50px";

  // console.log( document.querySelectorAll("img") );
  // min = math.cell(0);
  // max = math.floor(2);
  // let n =math.floor(Math.random() (max - min + 1) + min);
  // console.log(n)
  
  // document.querySelectorAll("img")[0].style.visibility="visible"

  // alert (document.querySelector ("#name").value);
  
  document.querySelector("#hasil").value = document.querySelector("#name").value;
  document.querySelector("#para").innerText = document.querySelector("#name").value; 
}
  // btn.onclick = tampil;
  // btn.onmouseover = function () {
  //   alert("javascript");
  // }

  // btn.addEventlistener('mouseover',tampil);
  
// 
btn.onclick = function () {
  const nama = document.querySelector("#nama");
  if (nama.value == "") {
    alert("nama sama")
  }else{
    alert(nama.value)
  }
  // >< == |= <= >=
  // let a = 4;
  // let b = 2;
  // // b = b + a;
  // // b = b - a;
  // // b = b * a;
  // // b = b / a
  // b = a ** b
  // console.log(b);
  // let menu = document.querySelector ("ul");
  // menu.removeChild(menu.children[0]);
  // const nama = document.querySelector("#nama");
  // const judul = document.querySelector("h1");
  // let tampil = "belajar";
  // judul.innerHTML = tampil + nama.value;
  // let tampil = "javascript";
  // judul.innerHTML = tampil + nama.value;

}