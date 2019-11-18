<!DOCTYPE html>
<html>
    
    <head>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='css/styles.css'>
        <link rel='stylesheet' href='css/stats.css'>
        <title>Character Creator</title>
    </head>
    <body>
        <div id='wrapper'>
<?php
#require_once 'header.php';
echo <<<_END
<div id='character_form'>
<form action='https://wp.zybooks.com/form-viewer.php' target='_blank' method='POST'>
    <fieldset id='char_sheet'>
        <legend>Character Creation</legend>
        
        
        <div>
        <input type='radio' name='char_type' value='player' id='player' checked><label for='player'>Player</label>
        <input type='radio' name='char_type' value='monster' id='monster'><label for='monster'>Monster</label>
        </div>
        
        <div>
        <label for='char_name'>Character Name</label>
        <input type='text id='char_name' name='char_name' placeholder='Llewyn' required>
        <label for='player_name'>Player Name</label>
        <input type='text' id='player_name' name='player_name' placeholder='John Smith'>
        </div>
        
        <div>
        <label for='class'>Class</label>
        <select id='class' name="class">
            <option value="barbarian">Barbarian</option>
            <option value="bard">Bard</option>
            <option value="cleric">Cleric</option>
            <option value="druid">Druid</option>
            <option value="fighter">Fighter</option>
            <option value="monk">Monk</option>
            <option value="paladin">Paladin</option>
            <option value="ranger">Ranger</option>
            <option value="rouge">Rouge</option>
            <option value="sorcerer">Sorcerer</option>
            <option value="warlock">Warlock</option>
            <option value="wizard">Wizard</option>
        </select>
        
        <label for='monster_type'>Monster Type</label>
        <select id='monster_type' name="monster_type">
            <option value="aberration">Aberration</option>
            <option value="beast">Beast</option>
            <option value="celestial">Celestial</option>
            <option value="construct">Construct</option>
            <option value="dragon">Elemental</option>
            <option value="elemental">Elemental</option>
            <option value="fey">Fey</option>
            <option value="fiend">Fiend</option>
            <option value="giant">Giant</option>
            <option value="humanoid">Humanoid</option>
            <option value="monstrosity">Monstrosity</option>
            <option value="ooze">Ooze</option>
            <option value="plant">Plant</option>
            <option value="undead">Undead</option>
        </select>
        </div>
        <br><br>
        
        <div>
        <label for='level'>Level</label>
        <input type='number' id='level' name='level' placeholder='1' min='1' max='20' required><br><br>
        
        <label for='hp'>HP</label>
        <input type='number' id='hp' name='hp' placeholder='0' min='0' required>
        
        <label for='armor'>Armor Class</label>
        <input type='number' id='armor' name='armor' placeholder='0' min='0' required>
        
        <label for='speed'>Speed</label>
        <input type='number' id='speed' name='speed' placeholder='30' min='0' required>
        </div>
        <br><br>
        
        
        <div>
        <label for='strength'>Strength</label>
        <input type='number' id='strength' name='strength' placeholder='0' min='0' max ='20' required>
        <label for='dex'>Dexterity</label>
        <input type='number' id='dex' name='dex' placeholder='0' min='0' max ='20' required>
        <label for='constit'>Constitution</label>
        <input type='number' id='constit' name='constit' placeholder='0' min='0' max ='20' required><br><br>
        <label for='intel'>Intelligence</label>
        <input type='number' id='intel' name='intel' placeholder='0' min='0' max ='20' required>
        <label for='wisdom'>Wisdom</label>
        <input type='number' id='wisdom' name='wisdom' placeholder='0' min='0' max ='20' required>
        <label for='charisma'>Charisma</label>
        <input type='number' id='charisma' name='charisma' placeholder='0' min='0' max ='20' required>
        </div><br><br>
        
        Character Image:
        <input type='file' name='image' size='14'><br><br>
        
        <div>
        <label for='align'>Alignment</label>
        <select id='align' name="align">
            <option value="lawG">Lawful Good</option>
            <option value="neutG">Neutral Good</option>
            <option value="chaG">Chaotic Good</option>
            <option value="lawN">Lawful Neutral</option>
            <option value="truN">True Neutral</option>
            <option value="chaN">Chaotic Neutral</option>
            <option value="lawE">Lawful Evil</option>
            <option value="neutE">Neutral Evil</option>
            <option value="chaE">Chaotic Evil</option>
        </select>
        
        <label for='race'>Race</label>
        <input type='text' id='race' name='race' placeholder='Human' required>
        </div><br><br>
        
        <div>
        <label for='profs'>Proficiencies</label>
        <br>
        <textarea rows='7' cols='40' id='profs' name='profs'></textarea><br>
        
        <label for='notes'>Notes</label>
        <br>
        <textarea rows="7" cols="40" id='notes' name='notes'></textarea>
        </div>
        
        <p>
            <input type="submit" value="Create Character">
        </p>
    </fieldset>
    </form>
    </div>
_END;

echo <<<_END
    <div id='creation_help'>
        <p>
            This is where the info pulled from the DB will go to assist in character creation.
        </p>
    </div>
_END;
#require_once 'footer.php'
?>
            </div>
        </body>
</html>


