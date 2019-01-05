/**
 * @module Test
 * @author Vasile Pește <sirvasile@protonmail.ch>
*/

import { Typefont } from "../src/index.js";

function scan(gambar){
    const test = async (options) => {
        const dir = "images/";
        const images = [
            gambar
        ];
        const results = [
            ["Roboto", "Ubuntu", "Nunito Sans", "Aldrich", "Raleway", "Lora", "Times New Roman"]
        ];
        Typefont("/images/book.png").then(res => console.log(res));
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

            document.getElementById("hasil").innerHTML = `Test ${i}`, res, !ex ? "Passed" : "Not Passed";
        }
    };

    test({
        fontsIndex: "../storage/index.json",
        fontsDirectory: "../storage/fonts/"
    });
}

