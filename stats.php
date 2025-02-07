<?php
#require_once 'header.php';
echo <<<_END
<form action='https://wp.zybooks.com/form-viewer.php' target='_blank' method='POST'>
    <fieldset id='char_sheet'>
        <legend>Character Creation</legend>
        
        
        <p>
        <input type='radio' name='char_type' value='player' id='player' checked><label for='player'>Player</label>
        <input type='radio' name='char_type' value='monster' id='monster'><label for='monster'>Monster</label>
        </p>
        
        <label for='char_name'>Character Name</label>
        <input type='text id='char_name' name='char_name' placeholder='Llewyn' required>
        
        <label for='player_name'>Player Name</label>
        <input type='text' id='player_name' name='player_name' placeholder='John Smith'><br><br>
        
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
        <br><br>
        
        <label for='level'>Level</label>
        <input type='number' id='level' name='level' placeholder='1' required><br><br>
        
        <label for='hp'>HP</label>
        <input type='number' id='hp' name='hp' placeholder='0' required>
        
        <label for='armor'>Armor Class</label>
        <input type='number' id='armor' name='armor' placeholder='0' required>
        
        <label for='speed'>Speed</label>
        <input type='text' id='speed' name='speed' placeholder='30' required><br><br>
        
        <label for='strength'>Strength</label>
        <input type='text' id='strength' name='strength' placeholder='0' required>
        <label for='dex'>Dexterity</label>
        <input type='text' id='dex' name='dex' placeholder='0' required>
        <label for='constit'>Constitution</label>
        <input type='text' id='constit' name='constit' placeholder='0' required><br><br>
        <label for='intel'>Intelligence</label>
        <input type='text' id='intel' name='intel' placeholder='0' required>
        <label for='wisdom'>Wisdom</label>
        <input type='text' id='wisdom' name='wisdom' placeholder='0' required>
        <label for='charisma'>Charisma</label>
        <input type='text' id='charisma' name='charisma' placeholder='0' required><br><br>
        Character Image:
        <input type='file' name='image' size='14'><br><br>
        
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
        <input type='text' id='race' name='race' placeholder='Human' required><br><br>
        
        <label for='profs'>Proficiencies</label>
        <br>
        <textarea rows='5' cols='20' id='profs' name='profs'></textarea><br>
        
        <label for='notes'>Notes</label>
        <br>
        <textarea rows="5" cols="20" id='notes' name='notes'></textarea>
        
        <p>
            <input type="submit" value="Create Character">
        </p>
    </fieldset>
_END;
#require_once 'footer.php'
?>

