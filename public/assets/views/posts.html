
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Users Validation</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>

        <h3><?= $title ?></h3>

        <button id="fetch-db">
            fetch users from backend with query string
        </button>

        <div id="posts-container"></div>

        <h3 style="margin-top: 50px">create a user</h3>


        <form id="form-id">
            <div style="margin: 20px 0">
                <label>name</label>
                <input type="text" id='name' name="name">
                <br>
                <label>id</label>
                <input type="text" id='id' name="id">
                <br>
            </div>
            <div style="margin: 20px 0">
                <input type="submit" value="submit"><br/>
            </div>
        </form>

        <div id="data-container"></div>

        <script>

            $(document).ready(function () {

                $("#fetch-db").click(function () {
                    $.ajax({
                        url: 'http://localhost:8888/posts',
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            console.log(data)
                            $('#posts-container').html('')
                            $.each( data, function( key, value ) {
                                console.log(value)
                                $('#posts-container').append(`
                                   <p>${value['id']} ${value['name']}</p> `)
                            });
                        }
                    });
                })



                $('#form-id').on('submit', function (e) {
                    e.preventDefault();
                    var name = $('#name').val();
                    var id = $('#id').val();

                    const data = {
                        name: name,
                        id: id,
                    }

                    $.ajax({
                        url: 'http://localhost:8888/posts',
                        type: "POST",
                        data: data,
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            $('#name').val('')
                            $('#id').val('')
                            $('#data-container').html(
                                `<div>
                                    success:
                                    <p>${data.name}</p>
                                    <p>${data.id}</p>
                                 </div>`
                            )
                        },
                        error: function (data){

                            $('#data-container').html('')
                            $.each( data.responseJSON, function( key, value ) {
                                $('#data-container').append(`
                                   <p>${value}</p> `)
                            });

                        }
                    });

                });
            })


        </script>

    </body>
</html>
