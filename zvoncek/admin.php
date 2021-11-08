

<!DOCTYPE html>
<html>
<head>
    <title>Denné menu editor</title>
</head>
<body>

    <form method="post" action="process.php">
        <table>
            <div class="monday weekday">
                <tr>
                    <td><label for="tyzden">Týždeň (napr. "45. Týždeň")</label></td>
                    <td><input type="text" name="tyzden" id="tyzden"></td>
                </tr>
                <tr>
                    <td><label for="pondelok">Pondelok </label></td>
                    <td><input type="text" class="pondelok" name="mondate" ></td>
                </tr>
                <tr>
                    <td><label for="monsoup">Polievka: </label></td>
                    <td><input type="text" class="pondelokpolievka" name="monsoup" ></td>
                    <td><input type="text" class="pondelokpolievkaalergens" name="monsoupalergens" ></td>
                    <td></td>
                </tr> <tr>
                    <td><label for="pondelok1">1 </label></td>
                    <td><input type="text" class="pondelok1" id="monfood1" name="monfood1" ></td>
                    <td><input type="text" class="pondelok1" id="monfood1alergens" name="monfood1alergens" ></td>
                    <td><input type="text" class="pondelok1" id="monfood1price" name="monfood1price" ></td>
                </tr> <tr>
                    <td><label for="pondelok2">2 </label></td>
                    <td><input type="text" class="pondelok2" id="monfood2" name="monfood2" ></td>
                    <td><input type="text" class="pondelok2" id="monfood2alergens" name="monfood2alergens" ></td>
                    <td><input type="text" class="pondelok2" id="monfood2price" name="monfood2price" ></td>
                </tr> <tr>
                    <td><label for="pondelok3">3 </label></td>
                    <td><input type="text" class="pondelok3" id="monfood3" name="monfood3" ></td>
                    <td><input type="text" class="pondelok3" id="monfood3alergens" name="monfood3alergens" ></td>
                    <td><input type="text" class="pondelok3" id="monfood3price" name="monfood3price" ></td>
                </tr> <tr>
                    <td><label for="pondelok4">4 </label></td>
                    <td><input type="text" class="pondelok4" id="monfood4" name="monfood4" ></td>
                    <td><input type="text" class="pondelok4" id="monfood4alergens" name="monfood4alergens" ></td>
                    <td><input type="text" class="pondelok4" id="monfood4price" name="monfood4price" ></td>
                </tr>
            </div>

            <div class="tueday weekday">
                <tr>
                    <td><label for="utorok">Utorok </label></td>
                    <td><input type="text" class="utorok" name="tuedate" ></td>
                </tr>
                <tr>
                    <td><label for="tuesoup">Polievka: </label></td>
                    <td><input type="text" class="utorokpolievka" name="tuesoup" ></td>
                    <td><input type="text" class="utorokpolievkaalergens" name="tuesoupalergens" ></td>
                    <td></td>
                </tr> <tr>
                    <td><label for="utorok1">1 </label></td>
                    <td><input type="text" class="utorok1" id="tuefood1" name="tuefood1" ></td>
                    <td><input type="text" class="utorok1" id="tuefood1alergens" name="tuefood1alergens" ></td>
                    <td><input type="text" class="utorok1" id="tuefood1price" name="tuefood1price" ></td>
                </tr> <tr>
                    <td><label for="utorok2">2 </label></td>
                    <td><input type="text" class="utorok2" id="tuefood2" name="tuefood2" ></td>
                    <td><input type="text" class="utorok2" id="tuefood2alergens" name="tuefood2alergens" ></td>
                    <td><input type="text" class="utorok2" id="tuefood2price" name="tuefood2price" ></td>
                </tr> <tr>
                    <td><label for="utorok3">3 </label></td>
                    <td><input type="text" class="utorok3" id="tuefood3" name="tuefood3" ></td>
                    <td><input type="text" class="utorok3" id="tuefood3alergens" name="tuefood3alergens" ></td>
                    <td><input type="text" class="utorok3" id="tuefood3price" name="tuefood3price" ></td>
                </tr> <tr>
                    <td><label for="utorok4">4 </label></td>
                    <td><input type="text" class="utorok4" id="tuefood4" name="tuefood4" ></td>
                    <td><input type="text" class="utorok4" id="tuefood4alergens" name="tuefood4alergens" ></td>
                    <td><input type="text" class="utorok4" id="tuefood4price" name="tuefood4price" ></td>
                </tr>
            </div>

            <div class="wednesday weekday">
                <tr>
                    <td><label for="streda">Streda </label></td>
                    <td><input type="text" class="streda" name="weddate" ></td>
                </tr>
                <tr>
                    <td><label for="wedsoup">Polievka: </label></td>
                    <td><input type="text" class="stredapolievka" name="wedsoup" ></td>
                    <td><input type="text" class="stredapolievkaalergens" name="wedsoupalergens" ></td>
                    <td></td>
                </tr> <tr>
                    <td><label for="streda1">1 </label></td>
                    <td><input type="text" class="streda1" id="wedfood1" name="wedfood1" ></td>
                    <td><input type="text" class="streda1" id="wedfood1alergens" name="wedfood1alergens" ></td>
                    <td><input type="text" class="streda1" id="wedfood1price" name="wedfood1price" ></td>
                </tr> <tr>
                    <td><label for="streda2">2 </label></td>
                    <td><input type="text" class="streda2" id="wedfood2" name="wedfood2" ></td>
                    <td><input type="text" class="streda2" id="wedfood2alergens" name="wedfood2alergens" ></td>
                    <td><input type="text" class="streda2" id="wedfood2price" name="wedfood2price" ></td>
                </tr> <tr>
                    <td><label for="streda3">3 </label></td>
                    <td><input type="text" class="streda3" id="wedfood3" name="wedfood3" ></td>
                    <td><input type="text" class="streda3" id="wedfood3alergens" name="wedfood3alergens" ></td>
                    <td><input type="text" class="streda3" id="wedfood3price" name="wedfood3price" ></td>
                </tr> <tr>
                    <td><label for="streda4">4 </label></td>
                    <td><input type="text" class="streda4" id="wedfood4" name="wedfood4" ></td>
                    <td><input type="text" class="streda4" id="wedfood4alergens" name="wedfood4alergens" ></td>
                    <td><input type="text" class="streda4" id="wedfood4price" name="wedfood4price" ></td>
                </tr>
            </div>

            <div class="thusday weekday">
                <tr>
                    <td><label for="stvrtok">Štvrtok </label></td>
                    <td><input type="text" class="stvrtok" name="thudate" ></td>
                </tr>
                <tr>
                    <td><label for="thusoup">Polievka: </label></td>
                    <td><input type="text" class="stvrtokpolievka" name="thusoup" ></td>
                    <td><input type="text" class="stvrtokpolievkaalergens" name="thusoupalergens" ></td>
                    <td></td>
                </tr> <tr>
                    <td><label for="stvrtok1">1 </label></td>
                    <td><input type="text" class="stvrtok1" id="thufood1" name="thufood1" ></td>
                    <td><input type="text" class="stvrtok1" id="thufood1alergens" name="thufood1alergens" ></td>
                    <td><input type="text" class="stvrtok1" id="thufood1price" name="thufood1price" ></td>
                </tr> <tr>
                    <td><label for="stvrtok2">2 </label></td>
                    <td><input type="text" class="stvrtok2" id="thufood2" name="thufood2" ></td>
                    <td><input type="text" class="stvrtok2" id="thufood2alergens" name="thufood2alergens" ></td>
                    <td><input type="text" class="stvrtok2" id="thufood2price" name="thufood2price" ></td>
                </tr> <tr>
                    <td><label for="stvrtok3">3 </label></td>
                    <td><input type="text" class="stvrtok3" id="thufood3" name="thufood3" ></td>
                    <td><input type="text" class="stvrtok3" id="thufood3alergens" name="thufood3alergens" ></td>
                    <td><input type="text" class="stvrtok3" id="thufood3price" name="thufood3price" ></td>
                </tr> <tr>
                    <td><label for="stvrtok4">4 </label></td>
                    <td><input type="text" class="stvrtok4" id="thufood4" name="thufood4" ></td>
                    <td><input type="text" class="stvrtok4" id="thufood4alergens" name="thufood4alergens" ></td>
                    <td><input type="text" class="stvrtok4" id="thufood4price" name="thufood4price" ></td>
                </tr>
            </div>

            <div class="friday weekday">
                <tr>
                    <td><label for="piatok">Piatok </label></td>
                    <td><input type="text" class="piatok" name="fridate" ></td>
                </tr>
                <tr>
                    <td><label for="frisoup">Polievka: </label></td>
                    <td><input type="text" class="piatokpolievka" name="frisoup" ></td>
                    <td><input type="text" class="piatokpolievkaalergens" name="frisoupalergens" ></td>
                    <td></td>
                </tr> <tr>
                    <td><label for="piatok1">1 </label></td>
                    <td><input type="text" class="piatok1" id="frifood1" name="frifood1" ></td>
                    <td><input type="text" class="piatok1" id="frifood1alergens" name="frifood1alergens" ></td>
                    <td><input type="text" class="piatok1" id="frifood1price" name="frifood1price" ></td>
                </tr> <tr>
                    <td><label for="piatok2">2 </label></td>
                    <td><input type="text" class="piatok2" id="frifood2" name="frifood2" ></td>
                    <td><input type="text" class="piatok2" id="frifood2alergens" name="frifood2alergens" ></td>
                    <td><input type="text" class="piatok2" id="frifood2price" name="frifood2price" ></td>
                </tr> <tr>
                    <td><label for="piatok3">3 </label></td>
                    <td><input type="text" class="piatok3" id="frifood3" name="frifood3" ></td>
                    <td><input type="text" class="piatok3" id="frifood3alergens" name="frifood3alergens" ></td>
                    <td><input type="text" class="piatok3" id="frifood3price" name="frifood3price" ></td>
                </tr> <tr>
                    <td><label for="piatok4">4 </label></td>
                    <td><input type="text" class="piatok4" id="frifood4" name="frifood4" ></td>
                    <td><input type="text" class="piatok4" id="frifood4alergens" name="frifood4alergens" ></td>
                    <td><input type="text" class="piatok4" id="frifood4price" name="frifood4price" ></td>
                </tr>
            </div>
        </table>
        <input type="submit" class="submit" value="submit">
    </form>
</body>
</html>