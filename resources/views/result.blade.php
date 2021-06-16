<!doctype html>
<html lang="en">
<head>
    <title>Calculate Practice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

</head>
<body>
<div class="container">

    <div class="card" style="width: 400px; margin-left: 30%; margin-top: 30px">
        <div class="buttons">
{{--            <form action="" method="post">--}}
{{--                @csrf--}}
                <table class="table">
                    <tr>
                        <td colspan="5">
                            <footer class="card-footer">
                                <input type="text" value="{{ $result }}" class="input is-rounded" style="width: 100%">
                            </footer>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">7</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">8</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">9</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">/</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">CE</a></button>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">4</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">5</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">6</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">*</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">C</a></button>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">1</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">2</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">3</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">-</a></button>
                        </th>
                        <th rowspan="2">
                            <button type="submit" style="height: 100%" class="button is-info is-light"><a href="">=</a></button>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <button type="button" style="height: 100%" class="button is-info is-light"><a href="">0</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">.</a></button>
                        </th>
                        <th>
                            <button type="button" class="button is-info is-light"><a href="">+</a></button>
                        </th>
                    </tr>
                </table>
{{--            </form>--}}

        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
