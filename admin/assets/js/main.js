function changeStatus(e){
	console.log($(e)[0].dataset.iduser);
  var data = "id_user=" + $(e)[0].dataset.iduser;
  

  // формирование ajax запроса      
  var ajax = new XMLHttpRequest();
    ajax.open("POST", "option/users/changeStatus.php", false);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(data);
console.dir(ajax);


  var status = document.querySelector('#spisokUsers');
  // заменить содержимое списка мест
  status.innerHTML = ajax.response;
  
}
