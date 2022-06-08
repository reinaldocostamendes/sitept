function filtra (){
   var slct = document.getElementById("filtro_valor").value;
       if(slct == "todas"){
	   window.location.replace("http://localhost/project/escolha_biknicker?id_biknicker=10&categoria=refeicoes&tipo_refeicao=todas");
   }
        if(slct == "standart"){
 window.location.replace("http://localhost/project/escolha_biknicker?id_biknicker=10&categoria=refeicoes&tipo_refeicao=standart");
   }
        if(slct == "luxo"){
 window.location.replace("http://localhost/project/escolha_biknicker?id_biknicker=10&categoria=refeicoes&tipo_refeicao=luxo");
   }
        if(slct == "carta"){
  window.location.replace("http://localhost/project/escolha_biknicker?id_biknicker=10&categoria=refeicoes&tipo_refeicao=carta");
   }
        if(slct == "bebidas"){
 window.location.replace("http://localhost/project/escolha_biknicker?id_biknicker=10&categoria=refeicoes&tipo_refeicao=bebidas");
   }
}