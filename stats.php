<?php
#require_once 'header.php';
echo <<<_END
<form action='https://wp.zybooks.com/form-viewer.php' target='_blank' method='POST'>
    <fieldset id='char_sheet'>
        <legend>Character Creation</legend>
        
        <label for='char_name'>Character Name</label>
        <input type='text id='char_name' name='char_name' placeholder='Llewyn'><br><br>
        
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
            <option value="paladin>Paladin</option>
            <option value="ranger">Ranger</option>
            <option value="rouge">Rouge</option>
            <option value="sorcerer">Sorcerer</option>
            <option value="warlock">Warlock</option>
            <option value="wizard">Wizard</option>
        </select>
        <br><br>
        
        <label for='level'>Level</label>
        <input type='number' id='level' name='level' placeholder='1'><br><br>
        
        <label for='hp'>HP</label>
        <input type='number' id='hp' name='hp' placeholder='0'><br><br>
        
        <p>
            <input type="submit" value="Create Character">
        </p>
        
        
    </fieldset>
_END;
#require_once 'footer.php'
?>
