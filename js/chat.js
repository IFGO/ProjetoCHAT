


function alterar_div() {
  $.ajax({
    type: "POST",
    url: "processa.php",
    data: {
      texto: $('#mensagem').val()
    },
    success: function(data) {
      $('#conteudo').append(data);
	  $("#mensagem").val('');
	  $(function() {
  var wtf    = $('#conteudo');
  var height = wtf[0].scrollHeight;
  wtf.scrollTop(height);
});
    }
  });
}

function atualizar_conversa() {
  $.ajax({
    type: "POST",
    url: "conversa.php",
    data: {
      nome_usuario: $('#mensagem').val()
    },
    success: function(data) {
      $('#conteudo').append(data);

    }
  });
}
