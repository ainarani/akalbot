//Fahmi custom blocks

Blockly.Blocks['input'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Input")
        .appendField(new Blockly.FieldDropdown([["HIGH","HIGH"], ["LOW","LOW"]]), "input");
    this.setOutput(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['delay'] = {
  init: function() {
    this.setColour(230);
    this.appendValueInput("DELAY_TIME", 'Number')
        .appendField("Delay")
        .setCheck('Number');
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setTooltip('Delay specific time');
    }
};

Blockly.Blocks['input_digital'] = {
  init: function() {
    this.setColour(230);
    this.appendDummyInput()
        .appendField("DigitalWrite")
        .appendField("PIN#")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "PIN")
        .appendField("STATE")
        .appendField(new Blockly.FieldDropdown([["LOW","LOW"], ["HIGH","HIGH"]]), "input");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
 this.setTooltip("");
  }
};

Blockly.Blocks['input_analog'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("AnalogWrite")
        .appendField("Pin#")
        .appendField(new Blockly.FieldDropdown(profile.default.analog), "pinA")
        .appendField("Value");
    this.appendValueInput("NUM")
        .setCheck("Number");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['output_analog'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("AnalogRead")
        .appendField("Pin#")
        .appendField(new Blockly.FieldDropdown(profile.default.analog), "pinA");
    this.setOutput(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['output_digital'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("DigitalRead")
        .appendField("PIN#")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "PIN");
    this.setOutput(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['arduino_motor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Both Motor")
        .appendField(new Blockly.FieldImage("picture/2motor.jpg", 50, 40, ""))
    this.appendDummyInput()
        .appendField("IN1")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN1")
        .appendField("IN2")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN2")
        .appendField("EN A")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN3")
    this.appendDummyInput()
        .appendField("IN3")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN4")
        .appendField("IN4")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN5")
        .appendField("EN B")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN6")
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("SPEED")
        .appendField(new Blockly.FieldNumber(0, 0, 255), "SPEED");
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("STATUS")
        .appendField(new Blockly.FieldDropdown([
            ["FORWARD","FORWARD"],
            ["BACKWARD","BACKWARD"],
            ["RIGHT","RIGHT"],
            ["LEFT","LEFT"],
            ["STOP","STOP"]]), "motion");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(280);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['arduino_motorA'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Motor A")
        .appendField(new Blockly.FieldImage("picture/motor.png", 50, 40, ""))
        .appendField("IN1")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN1")
        .appendField("IN2")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN2")
        .appendField("EN A")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN3")
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("SPEED")
        .appendField(new Blockly.FieldNumber(0, 0, 255), "SPEED");
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("STATUS")
        .appendField(new Blockly.FieldDropdown([
            ["FORWARD","FORWARD"], 
            ["BACKWARD","BACKWARD"], 
            ["STOP","STOP"]]), "movementA");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(280);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['arduino_motorB'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Motor B")
        .appendField(new Blockly.FieldImage("picture/motor.png", 50, 40, ""))
        .appendField("IN1")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN1")
        .appendField("IN2")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN2")
        .appendField("EN A")
        .appendField(new Blockly.FieldDropdown(profile["default"].digital), "PIN3")
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("SPEED")
        .appendField(new Blockly.FieldNumber(0, 0, 255), "SPEED");
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("STATUS")
        .appendField(new Blockly.FieldDropdown([
            ["FORWARD","FORWARD"], 
            ["BACKWARD","BACKWARD"], 
            ["STOP","STOP"]]), "movementB");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(280);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['led_block'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("LED")
        .appendField(new Blockly.FieldImage("picture/LED.jpg", 50, 40, "*"))
        .appendField("PIN#")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "PIN")
        .appendField("Status")
        .appendField(new Blockly.FieldDropdown([["HIGH","HIGH"], ["LOW","LOW"]]), "stat");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(240);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ultrasonic_sensor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Ultrasonic Sensor")
        .appendField(new Blockly.FieldImage("picture/ultrasonic.jpg", 50, 40, "*"))
        .appendField("PIN#")
        .appendField(new Blockly.FieldDropdown(profile.default.analog), "pinA");
    this.setOutput(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['line_sensor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Line Sensor")
        .appendField(new Blockly.FieldImage("picture/line_sensor.jpg", 50, 40, "*"))
        .appendField("PIN#")
        .appendField(new Blockly.FieldDropdown(profile.default.analog), "pinA");
    this.setOutput(true, null);
    this.setColour(240);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['color_sensor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Color sensor")
        .appendField(new Blockly.FieldImage("picture/tcs3200.jpg", 50, 40, "*"))
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("S0")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "s0")
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("S1")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "s1")
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("S2")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "s2")
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("S3")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "s3")
    this.appendDummyInput()
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("SENSOR OUT")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "senseOut")
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['servo_motor'] = {
  helpUrl: 'http://www.arduino.cc/playground/ComponentLib/servo',
  init: function() {
    this.setColour(280);
    this.appendDummyInput()
        .appendField("Servo")
        .appendField(new Blockly.FieldImage("picture/servo.jpg", 64, 64))
        .appendField("PIN#")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "PIN")
    this.appendValueInput("DEGREE", 'Number')
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("Degree (0~360)");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setTooltip('move between 0~180 degree');
  }
};

Blockly.Blocks['buzzer'] = {
  init: function() {
    this.setColour(240);
    this.appendDummyInput()
        .appendField("Buzzer")
        .appendField(new Blockly.FieldImage("picture/buzzer.jpg", 64, 64))
        .appendField("PIN#")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "PIN")
        .appendField("stat")
        .appendField(new Blockly.FieldDropdown([["HIGH", "HIGH"], ["LOW", "LOW"]]), "STAT");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setTooltip('Emit a tone when the output is high');
  }
};

Blockly.Blocks['ir_sensor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("IR Sensor")
        .appendField(new Blockly.FieldImage("picture/irsensor.jpg", 50, 50, "*"))
        .appendField("Sensor No")
        .appendField(new Blockly.FieldDropdown([["In1","In1"], ["In2","In2"], ["In3","In3"], ["In4","In4"]]), "pin_no")
        .appendField("PIN")
        .appendField(new Blockly.FieldDropdown(profile.default.digital), "PIN");
    this.setOutput(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['variable'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Variable")
        .appendField(new Blockly.FieldTextInput(""), "variable");
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['input_variable'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("VARIABLE")
        .appendField(new Blockly.FieldTextInput("put your variable here"), "variable");
    this.setPreviousStatement(true, null);
    this.setTooltip('');
  }
};