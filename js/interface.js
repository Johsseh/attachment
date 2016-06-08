 $("#btnSubmit").click(function() {
        var url = "addEmployee.php"; //goes to adding contact
        $.ajax({
            type: "POST",
            url: url,
            data: $("#frmAddEmp").serialize(),
            success: function(data)
            {
                $('#response').empty();
                $('#response').append(data); // Response
            }
        });

        return false;
    });


