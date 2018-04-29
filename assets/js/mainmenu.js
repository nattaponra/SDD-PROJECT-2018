$(function(){
    $(document).ready(function() {
        $('#create-model-menu').click(function() {
            $("#context-menu-renting").addClass("hidden");
            $("#div-create-model-context").removeClass("hidden"); 
            //window.location.href = this.id + '.html';
        });

        $('#edit-model-menu').click(function() {
            alert("hello");
        });

        $('#delete-model-menu').click(function() {
            alert("hello");
        });

        $('#import-price-menu').click(function() {
            alert("hello");
        });

        $('#search-area-menu').click(function() {
            alert("hello");
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            console.log(input.files[0].type);
        }
    }

    $("#imgInput").change(function(){
        if(checkTypeFiles(this.files[0].type))
        {
            readURL(this);
        }
        else
        {
            alert("อัพโหลดได้แค่ไฟล์รูปเท่านั้น");
        }
    }); 

    $("#btn-cancel-create-model").click(function(){
        $('#form-create-model')[0].reset();
        $("#context-menu-renting").removeClass("hidden");
        $("#div-create-model-context").addClass("hidden"); 
    });
    function checkTypeFiles(fileType)
    {
        if (fileType == 'image/jpg') {
            return true;
        }
        if (fileType == 'image/jpeg') {
            return true;
        }
        if (fileType == 'image/png') {
            return true;
        }
        return false;
    }
});


