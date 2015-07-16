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
    url: "chat/conversa.php",
    data: {
      textodestin: $('#destin').val()
    },
    success: function(data) {
      $('#conteudo').append(data);

    }
  });
}

function selecionar_destinatario(param,parem) {
  $.ajax({
      type: "POST",
      url: "chat/changeconversa.php",
    data: {
        dest: param,
        destn: parem
    },
    success: function(data) {
        $('#conteudo').empty();
        $('#conteudo').append(data);
        $('#destin').val(param);
    }
  });
}