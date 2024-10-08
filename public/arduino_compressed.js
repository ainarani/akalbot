// Do not edit this file; automatically generated by build.py.
'use strict';

Blockly.Arduino = new Blockly.Generator("Arduino");
Blockly.Arduino.addReservedWords("setup,loop,if,else,for,switch,case,while,do,break,continue,return,goto,define,include,HIGH,LOW,INPUT,OUTPUT,INPUT_PULLUP,true,false,interger, constants,floating,point,void,bookean,char,unsigned,byte,int,word,long,float,double,string,String,array,static, volatile,const,sizeof,pinMode,digitalWrite,digitalRead,analogReference,analogRead,analogWrite,tone,noTone,shiftOut,shitIn,pulseIn,millis,micros,delay,delayMicroseconds,min,max,abs,constrain,map,pow,sqrt,sin,cos,tan,randomSeed,random,lowByte,highByte,bitRead,bitWrite,bitSet,bitClear,bit,attachInterrupt,detachInterrupt,interrupts,noInterrupts");
Blockly.Arduino.ORDER_ATOMIC = 0;
Blockly.Arduino.ORDER_UNARY_POSTFIX = 1;
Blockly.Arduino.ORDER_UNARY_PREFIX = 2;
Blockly.Arduino.ORDER_MULTIPLICATIVE = 3;
Blockly.Arduino.ORDER_ADDITIVE = 4;
Blockly.Arduino.ORDER_SHIFT = 5;
Blockly.Arduino.ORDER_RELATIONAL = 6;
Blockly.Arduino.ORDER_EQUALITY = 7;
Blockly.Arduino.ORDER_BITWISE_AND = 8;
Blockly.Arduino.ORDER_BITWISE_XOR = 9;
Blockly.Arduino.ORDER_BITWISE_OR = 10;
Blockly.Arduino.ORDER_LOGICAL_AND = 11;
Blockly.Arduino.ORDER_LOGICAL_OR = 12;
Blockly.Arduino.ORDER_CONDITIONAL = 13;
Blockly.Arduino.ORDER_ASSIGNMENT = 14;
Blockly.Arduino.ORDER_NONE = 99;
var profile = {
    arduino: {
        description: "Arduino standard-compatible board",
        digital: [
            ["0", "0"],
            ["1", "1"],
            ["2", "2"],
            ["3", "3"],
            ["4", "4"],
            ["5", "5"],
            ["6", "6"],
            ["7", "7"],
            ["8", "8"],
            ["9", "9"],
            ["10", "10"],
            ["11", "11"],
            ["12", "12"],
            ["13", "13"]
        ],
        analog: [
            ["A0", "A0"],
            ["A1", "A1"],
            ["A2", "A2"],
            ["A3", "A3"],
            ["A4", "A4"],
            ["A5", "A5"],
            ["A6", "A6"],
            ["A7", "A7"]
        ],
        serial: 9600
    },
    arduino_mega: {
        description: "Arduino Mega-compatible board"
    }
};
profile["default"] = profile.arduino;
Blockly.Arduino.init = function (a) {
    Blockly.Arduino.definitions_ = Object.create(null);
    Blockly.Arduino.setups_ = Object.create(null);
    Blockly.Arduino.variableDB_ ? Blockly.Arduino.variableDB_.reset() : Blockly.Arduino.variableDB_ = new Blockly.Names(Blockly.Arduino.RESERVED_WORDS_);
    var b = [];
    a = Blockly.Variables.allVariables(a);
    for (var c = 0; c < a.length; c++) b[c] = "int " + Blockly.Arduino.variableDB_.getName(a[c], Blockly.Variables.NAME_TYPE) + ";\n";
    Blockly.Arduino.definitions_.variables = b.join("\n")
};
Blockly.Arduino.finish = function (a) {
    a = "  " + a.replace(/\n/g, "\n  ");
    a = a.replace(/\n\s+$/, "\n");
    a = "void loop() \n{\n" + a + "\n}";
    var b = [],
        c = [],
        d;
    for (d in Blockly.Arduino.definitions_) {
        var e = Blockly.Arduino.definitions_[d];
        e.match(/^#include/) ? b.push(e) : c.push(e)
    }
    e = [];
    for (d in Blockly.Arduino.setups_) e.push(Blockly.Arduino.setups_[d]);
    return (c.join("") + b.join("\n") + "\n" + "\nvoid setup() \n{\n" + e.join("\n") + "\n}\n\n").replace(/\n\n+/g, "\n\n").replace(/\n*$/, "\n\n\n") + a + "\n"
};
Blockly.Arduino.scrubNakedValue = function (a) {
    return a + "\n"
};
Blockly.Arduino.quote_ = function (a) {
    a = a.replace(/\\/g, "\\\\").replace(/\n/g, "\\\n").replace(/\$/g, "\\$").replace(/'/g, "\\'");
    return '"' + a + '"'
};
Blockly.Arduino.scrub_ = function (a, b) {
    if (null === b) return "";
    var c = "";
    if (!a.outputConnection || !a.outputConnection.targetConnection) {
        var d = a.getCommentText();
        d && (c += Blockly.Arduino.prefixLines(d, "// ") + "\n");
        for (var e = 0; e < a.inputList.length; e++) a.inputList[e].type == Blockly.INPUT_VALUE && (d = a.inputList[e].connection.targetBlock()) && (d = Blockly.Arduino.allNestedComments(d)) && (c += Blockly.Arduino.prefixLines(d, "// "))
    }
    e = a.nextConnection && a.nextConnection.targetBlock();
    e = Blockly.Arduino.blockToCode(e);
    return c +
        b + e
};

// *********************************************************************************************************************************
//Fahmi custom functions
Blockly.Arduino.customBlocks = {};
Blockly.Arduino.input = function () {
    return ["LOW" == this.getFieldValue("BOOL") ? "LOW" : "HIGH", Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.input_variable = function () {
    var a = this.getFieldValue("variable");
    return a + "();\n";
};
Blockly.Arduino.input_switch = function () {
    var a = Blockly.Arduino.statementToCode(this, "switch"),
        b = Blockly.Arduino.statementToCode(this, "case");
    // Blockly.Arduino.INFINITE_LOOP_TRAP && (a = Blockly.Arduino.INFINITE_LOOP_TRAP.replace(/%1/g, "'" + this.id + "'") + a);
    // Blockly.Arduino.INFINITE_LOOP_TRAP && (b = Blockly.Arduino.INFINITE_LOOP_TRAP.replace(/%1/g, "'" + this.id + "'") + b);
    //a && (b = "!" + b);
    return "\nswitch(" + a + ") {\n" + b + "}\n"
};
Blockly.Arduino.input_case = function () {
    var a = this.getFieldValue("cases");
    return "\n" + a + " :\n"
};
Blockly.Arduino.input_array = function () {
    var code = new Array(this.itemCount_);
    for (var n = 0; n < this.itemCount_; n++) {
        code[n] = Blockly.Arduino.valueToCode(this, 'ADD' + n, Blockly.Arduino.ORDER_COMMA) || 'senjata';
    }
    code = '{' + code.join(', ') + '}';
    //return "array_" + a + ".write(" + b + ");\n"
    return [code, Blockly.Arduino.ORDER_ATOMIC];
};
Blockly.Arduino.delay = function () {
    return "delay(" + (Blockly.Arduino.valueToCode(this, "DELAY_TIME", Blockly.Arduino.ORDER_ATOMIC) || "1000") + ");\n"
};
Blockly.Arduino.exit = function () {
    return "exit(" + (Blockly.Arduino.valueToCode(this, "NUM", Blockly.Arduino.ORDER_ATOMIC) || "0") + ");\n"
};
Blockly.Arduino.break = function () {
    return "break;\n"
};

Blockly.Arduino.new_text = function () {
    var a = this.getFieldValue("text");
    return a;
};
Blockly.Arduino.var_stesen = function () {
    var a = this.getFieldValue("text");
    Blockly.Arduino.definitions_["var_stesen" + a] = "Stesen_" + a + ";\n\n";
    Blockly.Arduino.setups_["setup_stesen_" + a] = "stesen_" + a + ".attach(" + a + ");\n";
    return "analogWrite(" + a + ");\n"
};
Blockly.Arduino.input_analog = function () {
    var a = this.getFieldValue("pinA"),
        b = Blockly.Arduino.valueToCode(this, "NUM", Blockly.Arduino.ORDER_ATOMIC);
    return "analogWrite(" + a + ", " + b + ");\n"
};
Blockly.Arduino.input_digital = function () {
    var a = this.getFieldValue("PIN"),
        b = this.getFieldValue("STATE");
    Blockly.Arduino.setups_["setup_output_" + a] = "pinMode(" + a + ", OUTPUT);";
    return "digitalWrite(" + a + ", " + b + ");\n"
};
Blockly.Arduino.output_analog = function () {
    var a = this.getFieldValue("pinA");
    Blockly.Arduino.setups_["setup_input_" + a] = "pinMode(" + a + ", INPUT);";
    return ["analogRead(" + a + ")", Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.output_digital = function () {
    return ["digitalRead(" + this.getFieldValue("PIN") + ")", Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.servo_motor = function () {
    var a = this.getFieldValue("PIN"),
        b = Blockly.Arduino.valueToCode(this, "DEGREE", Blockly.Arduino.ORDER_ATOMIC);
    Blockly.Arduino.definitions_.define_servo = "\n#include <Servo.h>\n\n";
    Blockly.Arduino.definitions_["var_servo" + a] = "Servo servo_" + a + ";\n\n";
    Blockly.Arduino.setups_["setup_servo_" + a] = "servo_" + a + ".attach(" + a + ");\n";
    return "servo_" + a + ".write(" + b + ");\n"
};
Blockly.Arduino.arduino_servo = function () {
    var a = this.getFieldValue("servomotion");
    Blockly.Arduino.definitions_.define_servo = "\n#include <Servo.h>\n\n";
    Blockly.Arduino.definitions_["var_servo"] = "\nint ServoLPin = 5;\nint ServoRPin = 6;\n\nServo ServoL,ServoR;\n\n";
    Blockly.Arduino.setups_.setup_servo = "\nServoL.attach(ServoLPin);\nServoR.attach(ServoRPin);\nServoL.write(-90);\nServoR.write(95);\n";
    var b = "";

    "ACCEL" === a ? (Blockly.Arduino.definitions_.define_accel = "void accel()\n{\nServoL.write(0);\nServoR.write(160);\n}\n",
        b = "accel();\n") :
        "TERUS" === a ? (Blockly.Arduino.definitions_.define_terus = "void terus()\n{\nServoL.write(0);\nServoR.write(180);\n}\n",
            b = "terus();\n") :
            "BELOK KANAN" === a ? (Blockly.Arduino.definitions_.define_belokkanan = "void belokkanan()\n{\nServoL.write(90);\nServoR.write(180);\n}\n",
                b = "belokkanan();\n") :
                "BACKRIGHT" === a ? (Blockly.Arduino.definitions_.define_backright = "void backright()\n{\nServoL.write(100);\nServoR.write(90);\n}\n",
                    b = "backright();\n") :
                    "BELOK KIRI" === a ? (Blockly.Arduino.definitions_.define_belokkiri = "void belokkiri()\n{\nServoL.write(-90);\nServoR.write(95);\n}\n",
                        b = "belokkiri();\n") :
                        "BACKLEFT" === a ? (Blockly.Arduino.definitions_.define_backleft = "void backleft()\n{\nServoL.write(90);\nServoR.write(70);\n}\n",
                            b = "backleft();\n") :
                            "UNDUR" === a ? (Blockly.Arduino.definitions_.define_undur = "void undur()\n{\nServoL.write(180);\nServoR.write(0);\n}\n",
                                b = "undur();\n") :
                                "BERHENTI" === a && (Blockly.Arduino.definitions_.define_berhenti = "void berhenti()\n{\nServoL.write(90);\nServoR.write(90);\n}\n",
                                    b = "berhenti();\n");
    return b

};
Blockly.Arduino.arduino_servo_def = function () {
    var a = this.getFieldValue("servomotion");
    Blockly.Arduino.definitions_.define_servo = "\n#include <Servo.h>\n\n";
    Blockly.Arduino.definitions_["var_servo"] = "\nint servoPin = 10;\nint servoPin2 = 9;\n\nServo Servo1,Servo2;\n\n";
    Blockly.Arduino.setups_.setup_servo = "\nServo1.attach(servoPin);\nServo2.attach(servoPin2);\n";
    var b = "";
    "FORWARD" === a ? (Blockly.Arduino.definitions_.define_forward = "void forward()\n{\nServo1.write(65);\nServo2.write(100);\n}\n",
        b = "forward();\n") :
        "ACCEL" === a ? (Blockly.Arduino.definitions_.define_accel = "void accel()\n{\nServo1.write(0);\nServo2.write(160);\n}\n",
            b = "accel();\n") :
            "RIGHT" === a ? (Blockly.Arduino.definitions_.define_right = "void right()\n{\nServo1.write(90);\nServo2.write(95);\n}\n",
                b = "right();\n") :
                "BACKRIGHT" === a ? (Blockly.Arduino.definitions_.define_backright = "void backright()\n{\nServo1.write(100);\nServo2.write(90);\n}\n",
                    b = "backright();\n") :
                    "LEFT" === a ? (Blockly.Arduino.definitions_.define_left = "void left()\n{\nServo1.write(70);\nServo2.write(90);\n}\n",
                        b = "left();\n") :
                        "BACKLEFT" === a ? (Blockly.Arduino.definitions_.define_backleft = "void backleft()\n{\nServo1.write(90);\nServo2.write(70);\n}\n",
                            b = "backleft();\n") :
                            "BACKWARD" === a ? (Blockly.Arduino.definitions_.define_backward = "void backward()\n{\nServo1.write(110);\nServo2.write(50);\n}\n",
                                b = "backward();\n") :
                                "STOPS" === a && (Blockly.Arduino.definitions_.define_stop = "void stops()\n{\nServo1.write(90);\nServo2.write(90);\n}\n",
                                    b = "stops();\n");
    return b
};
Blockly.Arduino.arduino_direct_motor = function () {
    var a = this.getFieldValue("PIN1");
    var b = this.getFieldValue("PIN2");
    var c = this.getFieldValue("PIN3");
    var d = this.getFieldValue("PIN4");
    var e = this.getFieldValue("PIN5");
    var f = this.getFieldValue("PIN6");
    var g = this.getFieldValue("motion");
    var i = this.getFieldValue("SPEED");
    Blockly.Arduino.setups_.setup_motor = "pinMode(" + a + ",OUTPUT);//I1\n  pinMode(" + b + ",OUTPUT);//I2\n  pinMode(" + c + ",OUTPUT);//speedPinA\n  pinMode(" + d + ",OUTPUT);//I3\n  pinMode(" + e + ",OUTPUT);//i4\n  pinMode(" + f + ",OUTPUT);//speedPinB\n";
    var h = "";
    "FORWARD" === g ? (Blockly.Arduino.definitions_.define_forward = "void forward()\n{\n  analogWrite(" + c + "," + i + ");//input a simulation value to set the speed\n  analogWrite(" + f + "," + i + ");\n  digitalWrite(" + a + ",HIGH);//turn DC Motor A move clockwise\n  digitalWrite(" + b + ",LOW);\n  digitalWrite(" + d + ",LOW);//turn DC Motor B move anticlockwise\n  digitalWrite(" + e + ",HIGH);\n}\n",
        h = "forward();\n") :
        "RIGHT" === g ? (Blockly.Arduino.definitions_.define_right = "void right()\n{\n  analogWrite(" + c + "," + i + ");//input a simulation value to set the speed\n  analogWrite(" + f + "," + i + ");\n  digitalWrite(" + a + ",LOW);//turn DC Motor A move anticlockwise\n  digitalWrite(" + b + ",HIGH);\n  digitalWrite(" + d + ",LOW);//turn DC Motor A move anticlockwise\n  digitalWrite(" + e + ",HIGH);\n}\n\n",
            h = "right();\n") :
            "LEFT" === g ? (Blockly.Arduino.definitions_.define_left = "void left()\n{\n  analogWrite(" + c + "," + i + ");//input a simulation value to set the speed\n  analogWrite(" + f + "," + i + ");\n  digitalWrite(" + a + ",HIGH);//turn DC Motor A move clockwise\n  digitalWrite(" + b + ",LOW);\n  digitalWrite(" + d + ",HIGH);//turn DC Motor A move clockwise\n  digitalWrite(" + e + ",LOW);\n}\n\n",
                h = "left();\n") :
                "BACKWARD" === g ? (Blockly.Arduino.definitions_.define_backward = "void backward()\n{\n  analogWrite(" + c + "," + i + ");//input a simulation value to set the speed\n  analogWrite(" + f + "," + i + ");\n  digitalWrite(" + a + ",LOW);//turn DC Motor A move anticlockwise\n  digitalWrite(" + b + ",HIGH);\n  digitalWrite(" + d + ",HIGH);//turn DC Motor A move clockwise\n  digitalWrite(" + e + ",LOW);\n}\n\n",
                    h = "backward();\n") :
                    "STOP" === g && (Blockly.Arduino.definitions_.define_stop = "void stop()\n{\ndigitalWrite(" + c + ",LOW);// Unable the pin, to stop the motor. this should be done to avpid damaging the motor.\ndigitalWrite(" + f + ",LOW);\ndelay(1000);\n}\n\n",
                        h = "stop();\n");
    return h
};
Blockly.Arduino.arduino_motorA = function () {
    var d = this.getFieldValue("PIN1");
    var e = this.getFieldValue("PIN2");
    var f = this.getFieldValue("PIN3");
    var a = this.getFieldValue("movementA");
    var c = this.getFieldValue("SPEED");
    Blockly.Arduino.setups_.setup_motorA = "pinMode(" + d + ",OUTPUT);//I1\n  pinMode(" + e + ",OUTPUT);//I2\n  pinMode(" + f + ",OUTPUT);//speedMotorA\n";
    var b = "";
    "FORWARD" === a ? (Blockly.Arduino.definitions_.define_forwardA = "void motorA_forward()\n{\n  analogWrite(" + f + "," + c + ");//input a simulation value to set the speed\n  digitalWrite(" + d + ",HIGH);//turn DC Motor B move clockwise\n  digitalWrite(" + e + ",LOW);\n}\n",
        b = "motorA_forward();\n") :
        "BACKWARD" === a ? (Blockly.Arduino.definitions_.define_backwardA = "void motorA_backward()\n{\n  analogWrite(" + f + "," + c + ");//input a simulation value to set the speed\n  digitalWrite(" + d + ",LOW);//turn DC Motor B move anticlockwise\n  digitalWrite(" + e + ",HIGH);\n}\n",
            b = "motorA_backward();\n") :
            "STOP" === a && (Blockly.Arduino.definitions_.define_stopA = "void motorA_stop(){\ndigitalWrite(" + f + ",LOW);\n}\n\n",
                b = "motorA_stop();\n");
    return b
};
Blockly.Arduino.arduino_motorB = function () {
    var d = this.getFieldValue("PIN1");
    var e = this.getFieldValue("PIN2");
    var f = this.getFieldValue("PIN3");
    var a = this.getFieldValue("movementB");
    var c = this.getFieldValue("SPEED");
    Blockly.Arduino.setups_.setup_motorB = "pinMode(" + d + ",OUTPUT);//I1\n  pinMode(" + e + ",OUTPUT);//I2\n  pinMode(" + f + ",OUTPUT);//speedMotorB\n";
    var b = "";
    "FORWARD" === a ? (Blockly.Arduino.definitions_.define_forwardB = "void motorB_forward()\n{\n  analogWrite(" + f + "," + c + ");//input a simulation value to set the speed\n  digitalWrite(" + d + ",HIGH);//turn DC Motor B move clockwise\n  digitalWrite(" + e + ",LOW);\n}\n",
        b = "motorB_forward();\n") :
        "BACKWARD" === a ? (Blockly.Arduino.definitions_.define_backwardB = "void motorB_backward()\n{\n  analogWrite(" + f + "," + c + ");//input a simulation value to set the speed\n  digitalWrite(" + d + ",LOW);//turn DC Motor B move anticlockwise\n  digitalWrite(" + e + ",HIGH);\n}\n",
            b = "motorB_backward();\n") :
            "STOP" === a && (Blockly.Arduino.definitions_.define_stopB = "void motorB_stop(){\ndigitalWrite(" + f + ",LOW);\n}\n\n",
                b = "motorB_stop();\n");
    return b
};
Blockly.Arduino.led_block = function () {
    var a = this.getFieldValue("PIN"),
        b = this.getFieldValue("STATE");
    Blockly.Arduino.setups_["setup_output_" + a] = "pinMode(" + a + ", OUTPUT);";
    return "digitalWrite(" + a + ", " + b + ");\n"
};
Blockly.Arduino.laser_sensor = function () {
    var a = this.getFieldValue("s0"),
        b = this.getFieldValue("s1");
    Blockly.Arduino.definitions_.laser_sensor = "int Laser = " + a + ";";
    "\nint Detector = " + b + ";";
    Blockly.Arduino.setups_.laser_sensor = "pinMode(Laser, OUTPUT);" +
        "\npinMode(Detector, INPUT);";
    return "\ndigitalWrite(Laser, HIGH);" +
        "\nboolean val = digitalRead(Detector);\n"
};
Blockly.Arduino.laser_detector = function () {
    var a = this.getFieldValue("laserdetect");
    Blockly.Arduino.definitions_.laser_detector = "\nint Detector = " + a + ";";
    Blockly.Arduino.setups_.laser_detector = "\npinMode(Detector, INPUT);";
    return "\nboolean val = digitalRead(Detector);\n"
};
Blockly.Arduino.laser_pointer = function () {
    var b = this.getFieldValue("laserpoint");
    Blockly.Arduino.definitions_.laser_pointer = "\nint Pointer = " + b + ";";
    Blockly.Arduino.setups_.laser_pointer = "\npinMode(Pointer, OUTPUT);";
    return "\ndigitalWrite(Pointer, HIGH);\n"
};
Blockly.Arduino.ultrasonic_sensor = function () {
    var a = this.getFieldValue("s0"),
        b = this.getFieldValue("s1");
    Blockly.Arduino.definitions_.ultra_sensor = "const int TriggerPin = " + a + ";" +
        "\nconst int EchoPin = " + b + ";" +
        "\nlong DM = 0 ;\n\n";
    Blockly.Arduino.setups_.ultra_sensor = "Serial.begin(9600);" +
        "\npinMode(TriggerPin, OUTPUT);" +
        "\npinMode(EchoPin, INPUT);\n\n";
    Blockly.Arduino.definitions_.define_startUltrasonic = "\nfloat checkdistance() {" +
        "\ndigitalWrite(TriggerPin, LOW); " +
        "\ndelayMicroseconds(2);" +
        "\ndigitalWrite(TriggerPin, HIGH);" +
        "\ndelayMicroseconds(10);" +
        "\ndigitalWrite(TriggerPin, LOW);" +
        "\nfloat distance = pulseIn(4, HIGH) / 58.00;" +
        "\ndelay(10);" +
        "\nreturn distance;\n\n" +
        "\n}\n\n";
    return "\nDM = checkdistance();" +
        "\nif (DM < 40 && DM > 20) {;" +
        "\nSerial.print(" + '"SHUH"' + ");//printing name" +
        "\nSerial.println (DM);" +
        "\n}" +
        "\n\nif (DM <= 20){ ;" +
        "\nSerial.print(" + '"CRASH!"' + ");//printing name" +
        "\nSerial.println (DM);" +
        "\n}" +
        "\n\nelse { ;" +
        "\nSerial.print(" + '"Misi mencari si Putih diteruskan"' + ");//printing name"
};
Blockly.Arduino.line_sensor = function () {
    var a = this.getFieldValue("pinA");
    Blockly.Arduino.definitions_.linesensor = "int linesensor = " + a + "\n\n";
    Blockly.Arduino.setups_["setup_output_" + a] = "pinMode( linesensor, INPUT);";
    return "analogWrite(" + a + ");\n"
}
Blockly.Arduino.color_sensor = function () {
    Blockly.Arduino.definitions_.color_sensor = "#define S0 2" +
        "\n#define S1 3" +
        "\n#define S2 4" +
        "\n#define S3 5" +
        "\n#define sensorOut 6\n\n" +
        "\nint frequency = 0;" +
        "\nint color = 0;\n" +
        "\nint state = 0;\n\n";
    Blockly.Arduino.setups_.color_sensor = "\npinMode(S0, OUTPUT);" +
        "\npinMode(S1, OUTPUT);" +
        "\npinMode(S2, OUTPUT);" +
        "\npinMode(S3, OUTPUT);" +
        "\npinMode(sensorOut, INPUT);\n\n" +
        "\ndigitalWrite(S0, HIGH);" +
        "\ndigitalWrite(S1, LOW);\n\n" +
        "Serial.begin(9600);\n\n";
    Blockly.Arduino.definitions_.define_readColor = "\nint readColor() {" +
        "\ndigitalWrite(S2, LOW);" +
        "\ndigitalWrite(S3, LOW);" +
        "\n\nfrequency = pulseIn(sensorOut, LOW);" +
        "\nint R = frequency;" +
        "\n\nSerial.print(" + '"R= "' + ");//printing name" +
        "\nSerial.print(frequency);//printing RED color frequency" +
        "\nSerial.print(" + '"  "' + ");" +
        "\ndelay(50);" +
        "\n\ndigitalWrite(S2, HIGH);" +
        "\ndigitalWrite(S3, HIGH);" +
        "\n\nfrequency = pulseIn(sensorOut, LOW);" +
        "\nint G = frequency;" +
        "\n\nSerial.print(" + '"G= "' + ");//printing name" +
        "\nSerial.print(frequency);//printing RED color frequency" +
        "\nSerial.print(" + '"  "' + ");" +
        "\ndelay(50);" +
        "\n\ndigitalWrite(S2, LOW);" +
        "\ndigitalWrite(S3, HIGH);" +
        "\n\nfrequency = pulseIn(sensorOut, LOW);" +
        "\nint B = frequency;" +
        "\n\nSerial.print(" + '"B= "' + ");//printing name" +
        "\nSerial.print(frequency);//printing RED color frequency" +
        "\nSerial.print(" + '"  "' + ");" +
        "\ndelay(50);" +
        "\n\nif (R<50 & R>35 & G<130 & G>100) {" +
        "\n\tcolor = 1; // RED" +
        "\n}" +
        "\n\nif (R<65 & R>50 & G<70 & G>50) {" +
        "\n\tcolor = 2; // GREEN" +
        "\n}" +
        "\n\nif (G<105 & G>85 & B<60 & B>40) {" +
        "\n\tcolor = 3; // BLUE" +
        "\n}" +
        "\n\nif (R<40 & R>25 & B<35 & B>20) {" +
        "\n\tcolor = 4; // WHITE" +
        "\n}" +
        "\n\nreturn color;" +
        "\n}\n\n";
    return "\ncolor = readColor();" +
        "\nSerial.println(color);\n"
}
Blockly.Arduino.color_sensor_def = function () {
    Blockly.Arduino.definitions_.color_sensor = "#define S0 2" +
        "\n#define S1 3" +
        "\n#define S2 4" +
        "\n#define S3 5" +
        "\n#define sensorOut 6\n\n" +
        "\nint frequency = 0;" +
        "\nint color = 0;\n" +
        "\nint state = 0;\n\n";
    Blockly.Arduino.setups_.color_sensor = "\npinMode(S0, OUTPUT);" +
        "\npinMode(S1, OUTPUT);" +
        "\npinMode(S2, OUTPUT);" +
        "\npinMode(S3, OUTPUT);" +
        "\npinMode(sensorOut, INPUT);\n\n" +
        "\ndigitalWrite(S0, HIGH);" +
        "\ndigitalWrite(S1, LOW);\n\n" +
        "Serial.begin(9600);\n\n";
    Blockly.Arduino.definitions_.define_readColor = "\nint readColor() {" +
        "\ndigitalWrite(S2, LOW);" +
        "\ndigitalWrite(S3, LOW);" +
        "\n\nfrequency = pulseIn(sensorOut, LOW);" +
        "\nint R = frequency;" +
        "\n\nSerial.print(" + '"R= "' + ");//printing name" +
        "\nSerial.print(frequency);//printing RED color frequency" +
        "\nSerial.print(" + '"  "' + ");" +
        "\ndelay(50);" +
        "\n\ndigitalWrite(S2, HIGH);" +
        "\ndigitalWrite(S3, HIGH);" +
        "\n\nfrequency = pulseIn(sensorOut, LOW);" +
        "\nint G = frequency;" +
        "\n\nSerial.print(" + '"G= "' + ");//printing name" +
        "\nSerial.print(frequency);//printing RED color frequency" +
        "\nSerial.print(" + '"  "' + ");" +
        "\ndelay(50);" +
        "\n\ndigitalWrite(S2, LOW);" +
        "\ndigitalWrite(S3, HIGH);" +
        "\n\nfrequency = pulseIn(sensorOut, LOW);" +
        "\nint B = frequency;" +
        "\n\nSerial.print(" + '"B= "' + ");//printing name" +
        "\nSerial.print(frequency);//printing RED color frequency" +
        "\nSerial.print(" + '"  "' + ");" +
        "\ndelay(50);" +
        "\n\nif (R<70 & R>45 & G<230 & G>170) {" +
        "\n\tcolor = 1; // RED" +
        "\n}" +
        "\n\nif (R<105 & R>75 & G<110 & G>70) {" +
        "\n\tcolor = 2; // GREEN" +
        "\n}" +
        "\n\nif (G<175 & G>130 & B<85 & B>55) {" +
        "\n\tcolor = 3; // BLUE" +
        "\n}" +
        "\n\nif (R<50 & R>30 & B<40 & B>25) {" +
        "\n\tcolor = 4; // WHITE" +
        "\n}" +
        "\n\nreturn color;" +
        "\n}\n\n";
    return "\ncolor = readColor();" +
        "\nSerial.println(color);\n"
}
Blockly.Arduino.buzzer = function () {
    var a = this.getFieldValue("PIN"),
        b = this.getFieldValue("STAT");
    Blockly.Arduino.definitions_.define_buzzer = "#define buzzer " + a + ";"
    Blockly.Arduino.setups_["setup_piezo_buzzer_" + a] = "pinMode(" + a + ", OUTPUT);";
    return "\ntone(buzzer, 5000, 500);" +
        "\ndelay(1000);\n"
};
Blockly.Arduino.ir_sensor = function () {
    var a = this.getFieldValue("PIN");
    Blockly.Arduino.setups_["setup_input_" + a] = "pinMode(" + a + ", INPUT);";
    return ["digitalRead(" + a + ")", Blockly.Arduino.ORDER_ATOMIC]
};

Blockly.Arduino.OLED_display = function () {
    var a = this.getFieldValue("4"),
        b = this.getFieldValue("RESETPIN#");
    Blockly.Arduino.definitions_.define_OLED = "\n#include <SPI.h>";
    Blockly.Arduino.definitions_.define_I2C = "\n#include <Wire.h>";
    Blockly.Arduino.definitions_.define_ADAfruitGFX = "\n#include<Adafruit_GFX.h>";
    Blockly.Arduino.definitions_.define_ADAfruitSSD1306 = "\n#include<Adafruit_SSD1306.h>\n\n";
    Blockly.Arduino.definitions_.define_OLED_RESET = "#define OLED_RESET " + b + ";"
    Blockly.Arduino.definitions_.define_OLED_Displayreset = "\nAdafruit_SSD1306 display(OLED_RESET);\n"; //-1 is reset pin
    Blockly.Arduino.setups_.OLED = "display.begin(SSD1306_SWITCHCAPVCC, 0x3C);\n" +
        "display.clearDisplay();\n\n"

    return "\ndisplay.setCursor(22, 20);" +
        "\ndisplay.println( DM );\n" +
        // "\ndisplay.setCursor(85, 20);"+
        //"\ndisplay.println("cm");\n"
        "\ndisplay.display();\n" +
        "\ndelay(500);" +
        "\ndisplay.clearDisplay();\n"

};
Blockly.Arduino.OLED_text_color = function () {
    var a = this.getFieldValue("WHITE"),
        b = this.getFieldValue("COLOR");
    return "\ndisplay.setTextColor(" + b + ");"

};
Blockly.Arduino.OLED_text_size = function () {
    var a = this.getFieldValue("2"),
        b = this.getFieldValue("SIZE");
    return "\ndisplay.setTextSize(" + b + ");"
};
Blockly.Arduino.variable = function () {
    var a = this.getFieldValue("variable")
    return [a + "\n", Blockly.Arduino.ORDER_ATOMIC]
};

Blockly.Arduino.for_loop = function () {
    var a = this.getFieldValue("loop"),
        b = this.getFieldValue("loop1");
    c = Blockly.Arduino.statementToCode(this, "do");
    return "for(int i=" + a + "; i<" + b + "; i++){\n" + c + "}\n"
};



// *********************************************************************************************************************************
//Blocklyduino original
Blockly.Arduino.loops = {};
Blockly.Arduino.controls_for = function () {
    var a = Blockly.Arduino.variableDB_.getName(this.getFieldValue("VAR"), Blockly.Variables.NAME_TYPE),
        b = Blockly.Arduino.valueToCode(this, "FROM", Blockly.Arduino.ORDER_ASSIGNMENT) || "0",
        c = Blockly.Arduino.valueToCode(this, "TO", Blockly.Arduino.ORDER_ASSIGNMENT) || "0",
        d = Blockly.Arduino.statementToCode(this, "DO");
    Blockly.Arduino.INFINITE_LOOP_TRAP && (d = Blockly.Arduino.INFINITE_LOOP_TRAP.replace(/%1/g, "'" + this.id + "'") + d);
    if (b.match(/^-?\d+(\.\d+)?$/) && c.match(/^-?\d+(\.\d+)?$/)) var e =
        parseFloat(b) <= parseFloat(c),
        d = "for (" + a + " = " + b + "; " + a + (e ? " <= " : " >= ") + c + "; " + a + (e ? "++" : "--") + ") {\n" + d + "}\n";
    else d = "", e = b, b.match(/^\w+$/) || b.match(/^-?\d+(\.\d+)?$/) || (e = Blockly.Arduino.variableDB_.getDistinctName(a + "_start", Blockly.Variables.NAME_TYPE), d += "int " + e + " = " + b + ";\n"), b = c, c.match(/^\w+$/) || c.match(/^-?\d+(\.\d+)?$/) || (b = Blockly.Arduino.variableDB_.getDistinctName(a + "_end", Blockly.Variables.NAME_TYPE), d += "int " + b + " = " + c + ";\n"), d += "for (" + a + " = " + e + ";\n    (" + e + " <= " + b + ") ? " + a +
        " <= " + b + " : " + a + " >= " + b + ";\n    " + a + " += (" + e + " <= " + b + ") ? 1 : -1) {\n" + branch0 + "}\n";
    return d
};
Blockly.Arduino.controls_whileUntil = function () {
    var a = "UNTIL" == this.getFieldValue("MODE"),
        b = Blockly.Arduino.valueToCode(this, "BOOL", a ? Blockly.Arduino.ORDER_LOGICAL_NOT : Blockly.Arduino.ORDER_NONE) || "false",
        c = Blockly.Arduino.statementToCode(this, "DO");
    Blockly.Arduino.INFINITE_LOOP_TRAP && (c = Blockly.Arduino.INFINITE_LOOP_TRAP.replace(/%1/g, "'" + this.id + "'") + c);
    a && (b = "!" + b);
    return "while (" + b + ") {\n" + c + "}\n"
};
Blockly.Arduino.controls_repeat_ext = function (a) {
    var b = a.getField("TIMES") ? String(Number(a.getFieldValue("TIMES"))) : Blockly.Arduino.valueToCode(a, "TIMES", Blockly.Arduino.ORDER_ASSIGNMENT) || "0";
    var c = Blockly.Arduino.statementToCode(a, "DO"),
        c = Blockly.Arduino.addLoopTrap(c, a.id),
        d = "",
        e = Blockly.Arduino.variableDB_.getDistinctName("i", Blockly.Variables.NAME_TYPE);
    a = b;
    b.match(/^\w+$/) || Blockly.isNumber(b) || (a = Blockly.Arduino.variableDB_.getDistinctName("repeat_end", Blockly.Variables.NAME_TYPE),
        d += "var " + a + " = " + b + ";\n");
    return d + ("for (int " + e + " = 0; " + e + " < " + a + "; " + e + "++) {\n" + c + "}\n")
};
Blockly.Arduino.controls_repeat = Blockly.Arduino.controls_repeat_ext;

function hexToR(a) {
    return parseInt(cutHex(a).substring(0, 2), 16)
}

function hexToG(a) {
    return parseInt(cutHex(a).substring(2, 4), 16)
}

function hexToB(a) {
    return parseInt(cutHex(a).substring(4, 6), 16)
}

function cutHex(a) {
    return "#" == a.charAt(0) ? a.substring(1, 7) : a
}
Blockly.Arduino.logic = {};
Blockly.Arduino.controls_if = function () {
    for (var a = 0, b = Blockly.Arduino.valueToCode(this, "IF" + a, Blockly.Arduino.ORDER_NONE) || "false",
        c = Blockly.Arduino.statementToCode(this, "DO" + a),
        d = "if (" + b + ") {\n" + c + "}\n", a = 1; a <= this.elseifCount_; a++) b = Blockly.Arduino.valueToCode(this, "IF" + a, Blockly.Arduino.ORDER_NONE) || "false",
            c = Blockly.Arduino.statementToCode(this, "DO" + a), d += " else if (" + b + ") {\n" + c + "}";
    this.elseCount_ && (c = Blockly.Arduino.statementToCode(this, "ELSE"), d += " else {\n" + c + "\n}");
    return d + "\n"
};
Blockly.Arduino.logic_compare = function () {
    var a = this.getFieldValue("OP"),
        a = Blockly.Arduino.logic_compare.OPERATORS[a],
        b = "==" == a || "!=" == a ? Blockly.Arduino.ORDER_EQUALITY : Blockly.Arduino.ORDER_RELATIONAL,
        c = Blockly.Arduino.valueToCode(this, "A", b) || "0",
        d = Blockly.Arduino.valueToCode(this, "B", b) || "0";
    return [c + " " + a + " " + d, b]
};
Blockly.Arduino.logic_compare.OPERATORS = {
    EQ: "=",
    NEQ: "!=",
    LT: "<",
    LTE: "<=",
    GT: ">",
    GTE: ">="
};
Blockly.Arduino.logic_operation = function () {
    var a = "AND" == this.getFieldValue("OP") ? "&&" : "||",
        b = "&&" == a ? Blockly.Arduino.ORDER_LOGICAL_AND : Blockly.Arduino.ORDER_LOGICAL_OR,
        c = Blockly.Arduino.valueToCode(this, "A", b) || "false",
        d = Blockly.Arduino.valueToCode(this, "B", b) || "false";
    return [c + " " + a + " " + d, b]
};
Blockly.Arduino.logic_negate = function () {
    var a = Blockly.Arduino.ORDER_UNARY_PREFIX;
    return ["!" + (Blockly.Arduino.valueToCode(this, "BOOL", a) || "false"), a]
};
Blockly.Arduino.logic_boolean = function () {
    return ["TRUE" == this.getFieldValue("BOOL") ? "true" : "false", Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.logic_null = function () {
    return ["NULL", Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.math = {};
Blockly.Arduino.math_number = function () {
    var a = window.parseFloat(this.getFieldValue("NUM"));
    return [a, 0 > a ? Blockly.Arduino.ORDER_UNARY_PREFIX : Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.math_arithmetic = function () {
    var a = this.getFieldValue("OP"),
        b = Blockly.Arduino.math_arithmetic.OPERATORS[a],
        a = b[0],
        b = b[1],
        c = Blockly.Arduino.valueToCode(this, "A", b) || "0",
        d = Blockly.Arduino.valueToCode(this, "B", b) || "0";
    return a ? [c + a + d, b] : ["Math.pow(" + c + ", " + d + ")", Blockly.Arduino.ORDER_UNARY_POSTFIX]
};
Blockly.Arduino.math_arithmetic.OPERATORS = {
    ADD: [" + ", Blockly.Arduino.ORDER_ADDITIVE],
    MINUS: [" - ", Blockly.Arduino.ORDER_ADDITIVE],
    MULTIPLY: [" * ", Blockly.Arduino.ORDER_MULTIPLICATIVE],
    DIVIDE: [" / ", Blockly.Arduino.ORDER_MULTIPLICATIVE],
    POWER: [null, Blockly.Arduino.ORDER_NONE]
};
Blockly.Arduino.procedures = {};
Blockly.Arduino.procedures_defreturn = function () {
    var a = Blockly.Arduino.variableDB_.getName(this.getFieldValue("NAME"), Blockly.Procedures.NAME_TYPE),
        b = Blockly.Arduino.statementToCode(this, "STACK");
    Blockly.Arduino.INFINITE_LOOP_TRAP && (b = Blockly.Arduino.INFINITE_LOOP_TRAP.replace(/%1/g, "'" + this.id + "'") + b);
    var c = Blockly.Arduino.valueToCode(this, "RETURN", Blockly.Arduino.ORDER_NONE) || "";
    c && (c = "  return " + c + ";\n");
    for (var d = c ? "int" : "void", e = [], f = 0; f < this.arguments_.length; f++) e[f] = "int " + Blockly.Arduino.variableDB_.getName(this.arguments_[f],
        Blockly.Variables.NAME_TYPE);
    b = d + " " + a + "(" + e.join(", ") + ") {\n" + b + c + "}\n";
    b = Blockly.Arduino.scrub_(this, b);
    Blockly.Arduino.definitions_[a] = b;
    return null
};
Blockly.Arduino.procedures_defnoreturn = Blockly.Arduino.procedures_defreturn;
Blockly.Arduino.procedures_callreturn = function () {
    for (var a = Blockly.Arduino.variableDB_.getName(this.getFieldValue("NAME"), Blockly.Procedures.NAME_TYPE), b = [], c = 0; c < this.arguments_.length; c++) b[c] = Blockly.Arduino.valueToCode(this, "ARG" + c, Blockly.Arduino.ORDER_NONE) || "null";
    return [a + "(" + b.join(", ") + ")", Blockly.Arduino.ORDER_UNARY_POSTFIX]
};
Blockly.Arduino.procedures_callnoreturn = function () {
    for (var a = Blockly.Arduino.variableDB_.getName(this.getFieldValue("NAME"), Blockly.Procedures.NAME_TYPE), b = [], c = 0; c < this.arguments_.length; c++) b[c] = Blockly.Arduino.valueToCode(this, "ARG" + c, Blockly.Arduino.ORDER_NONE) || "null";
    return a + "(" + b.join(", ") + ");\n"
};
Blockly.Arduino.procedures_ifreturn = function () {
    var a = "if (" + (Blockly.Arduino.valueToCode(this, "CONDITION", Blockly.Arduino.ORDER_NONE) || "false") + ") {\n";
    if (this.hasReturnValue_) var b = Blockly.Arduino.valueToCode(this, "VALUE", Blockly.Arduino.ORDER_NONE) || "null",
        a = a + ("  return " + b + ";\n");
    else a += "  return;\n";
    return a + "}\n"
};
Blockly.Arduino.texts = {};
Blockly.Arduino.text = function () {
    return [Blockly.Arduino.quote_(this.getFieldValue("TEXT")), Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.variables = {};
Blockly.Arduino.variables_get = function () {
    return [Blockly.Arduino.variableDB_.getName(this.getFieldValue("VAR"), Blockly.Variables.NAME_TYPE), Blockly.Arduino.ORDER_ATOMIC]
};
Blockly.Arduino.variables_declare = function () {
    this.getFieldValue("TYPE");
    var a = Blockly.Arduino.valueToCode(this, "VALUE", Blockly.Arduino.ORDER_ASSIGNMENT) || "0",
        b = Blockly.Arduino.variableDB_.getName(this.getFieldValue("VAR"), Blockly.Variables.NAME_TYPE);
    Blockly.Arduino.setups_["setup_var" + b] = b + " = " + a + ";\n";
    return ""
};
Blockly.Arduino.variables_set = function () {
    var a = Blockly.Arduino.valueToCode(this, "VALUE", Blockly.Arduino.ORDER_ASSIGNMENT) || "0";
    return Blockly.Arduino.variableDB_.getName(this.getFieldValue("VAR"), Blockly.Variables.NAME_TYPE) + " = " + a + ";\n"
};