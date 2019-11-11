
<div id="bootstrap-overrides">
        <div class="container-1 grouping">
            <br>
            <div class="form-group">
                <div class="input-group search-bar">
                    <span class="input-group-addon">Search</span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search..." class="form-control" />
                </div>
            </div>
            <br>
        </div>
        <div class="container-2" id="result"></div>
            
    </div>  

    <script>
    $(document).ready(function(){
    var txt=$('#search_text').val();
    if(txt ==''){
        $('#result').html('');
            $.ajax({
                url:"home_search_handle.php",
                method:"post",
                data:{search:txt},
                dataType: "text" ,
                success: function(data){
                    $('#result').html(data);
    }
    });
    }

    $('#search_text').keyup(function(){
    txt = $(this).val();
    if(txt =='')
        {
            $('#result').html('');
            $.ajax({
                url:"home_not_search_handle.php",
                method:"post",
                data:{search:txt},
                dataType: "text" ,
                success: function(data){
                    $('#result').html(data);
                }
            });
        }else{
            $('#result').html('');
            $.ajax({
                url:"fetch_admin_home.php",
                method:"post",
                data:{search:txt},
                dataType: "text" ,
                success: function(data){
                    $('#result').html(data);
                }
            });
        }
    });
});
</script>