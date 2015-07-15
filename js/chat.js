


function alterar_div() {
  $.ajax({
    type: "POST",
    url: "chat/processa.php",
    data: {
      texto: $('#mensagem').val()
    },
    success: function(data) {
        $('#mensagem').val('');
        $('#conteudo').append(data);
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
