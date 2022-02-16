'use strict';

{
  const submit = document.querySelector('button');
  const name = document.getElementById('name');
  const prefecture = document.querySelector('select');
  const gender = document.getElementsByName('gender');
  const genre = document.getElementsByName('genre[]');

  submit.addEventListener('click', (e) => {
    if (name.value == ""){
      e.preventDefault();
      alert("お名前を入力してください。");
    }

    if (prefecture.selectedIndex == 0){
      e.preventDefault();
      alert("都道府県を選択してください");
    }

    let count1 = 0;
    for(let i=0; i<gender.length; i++){
      if (gender[i].checked){
        count1++;
      }
    }
    if (count1<1){
      e.preventDefault();
      alert("性別を選択してください");
    }

    let count2 = 0;
    for(let i=0; i<genre.length; i++){
      if (genre[i].checked){
        count2++;
      }
    }
    if (count2<1){
      e.preventDefault();
      alert("興味のあるジャンルを選択してください");
    }
  })
}