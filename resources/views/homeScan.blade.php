@extends('template')

@section('isi')
    <script type="module">
        /**
         * @module Test
         * @author Vasile Pește <sirvasile@protonmail.ch>
         */

        import { Typefont } from "../src/index.js";

        const test = async (options) => {
            const dir = "images/";
            const images = [
                "{{$photo_nama_baru}}"
            ];
            const results = [
                ["Roboto", "Ubuntu", "Nunito Sans", "Aldrich", "Raleway", "Lora", "Times New Roman"]
            ];

            for (let i = 0, ll = images.length; i < ll; ++i)
            {
                const res = await Typefont(`${dir}${images[i]}`, options);
                let ex = 0;

                for (let j = 0, llj = results[i].length; j < llj; ++j)
                    if (results[i][j] != res[j].name)
                    {
                        ++ex;
                        console.warn(`Test ${i} at j => ${j} [expected: ${results[i][j]} but recevied ${res[j].name}]`);
                    }
            }
            const fonts = await Typefont("images/{{$photo_nama_baru}}");
            document.getElementById("hasil").innerHTML = fonts[0].name;
            var nama = fonts[0].name;
            if('{{$photo_nama_baru}}' != 'temp.jpg'){
                var save = document.getElementById("save");
                save.innerHTML = save.innerHTML + '<input class=\"btn btn-success\" type=\"submit\" formaction=\"/save/' + nama + '\" value=\"Save\">';
            }
        };

        test({
            fontsIndex: "../storage/index.json",
            fontsDirectory: "../storage/fonts/"
        });
    </script>
    <div class="container" id="upload-place">
        <form enctype="multipart/form-data">
            {{ csrf_field() }}
            <img style="width: 100%;" src="images\{{$photo_nama_baru}}">
            <br><br>
            <div class="form-group">
                <label for="email">Choose Picture:</label>
                <div>
                    <input type="file" class="form-control"  name="photo">
                </div>
            </div>
            <div id="hasil"></div>
            <input class="btn btn-success"type="submit" formaction="/home" formmethod="post" value="Upload">
            <div id="save">

            </div>
            @if( count( $errors ) > 0 )
                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning text-danger">{{ $error }}</div>
                @endforeach
            @endif
        </form>
    </div>
@endsection
