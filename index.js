function exibirArea(id){
    console.log(id);
    $.ajax({
        type: 'POST',
        url:'php/verificaArea.php',
        data: {id : id},
        success: function(quantidade){
            alert("Quantidade recebida" +quantidade);
            if(quantidade > 0){
                window.location.href = 'php/exibirCarros.php?id='+id;
            }else{
                alert("Essa área nã possui carros!");
            }
        }
    })
}