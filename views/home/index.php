<div class="container">
    <div class="card mt-5">
        <div class="card-header">
        <h4 class="card-title">Escala CPN</h4>
        </div>
        <div class="card-body">
            <p>Este é um teste</p>
            <p>Hello World</p>
        </div>
    </div>
</div>
</body>
<script>
    $(document).ready(()=>{
    $("#form-employee").submit((e)=>{
        
        e.preventDefault()
        
        let name_employee = $("#name").val()
        
        $.ajax({
            method: 'post',
            type: 'json',
            url:'/actions/funcionario/cadastro.php',
            data: {
                name: name_employee
            },
            success:()=>{
                $('#modal-employee').modal('hide')
                window.alert('cadastrado')
            },
            error: (request, stt, err)=>{
                $('#modal-employee').modal('hide')  
                window.alert(err)
            }
        })
        
    })
})
</script>
</html>
