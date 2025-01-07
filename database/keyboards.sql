

DROP TABLE IF EXISTS keyboards;
CREATE TABLE keyboards(
   name            VARCHAR(25) NOT NULL 
  ,switchType      VARCHAR(22) NOT NULL
  ,caseType        VARCHAR(8) NOT NULL
  ,pcbType         VARCHAR(13) NOT NULL
  ,keyboardType    DATE  NOT NULL
  ,ergonomic       VARCHAR(5) NOT NULL
  ,keycapsbrand    VARCHAR(8) NOT NULL
  ,keycapsmaterial VARCHAR(3) NOT NULL
  ,keycapsprocess  VARCHAR(15) NOT NULL
  ,backlight       VARCHAR(5) NOT NULL
  ,id              integer NOT NULL PRIMARY KEY AUTOINCREMENT
);

INSERT INTO keyboards(name,switchType,caseType,pcbType,keyboardType,ergonomic,keycapsbrand,keycapsmaterial,keycapsprocess,backlight) VALUES ('Ducky One 2 Mini 2','Cherry MX Speed Silver','Plastic','Standard','60%','false','Ducky','PBT','Double-shot','RGB');
INSERT INTO keyboards(name,switchType,caseType,pcbType,keyboardType,ergonomic,keycapsbrand,keycapsmaterial,keycapsprocess,backlight) VALUES ('Keychron K2','Gateron Brown','Aluminum','Hot-swappable','75%','false','Keychron','ABS','Laser engraved','White');
INSERT INTO keyboards(name,switchType,caseType,pcbType,keyboardType,ergonomic,keycapsbrand,keycapsmaterial,keycapsprocess,backlight) VALUES ('Drop ALT','Halo Clear','Aluminum','Hot-swappable','65%','true','MT3','PBT','Double-shot','RGB');
INSERT INTO keyboards(name,switchType,caseType,pcbType,keyboardType,ergonomic,keycapsbrand,keycapsmaterial,keycapsprocess,backlight) VALUES ('HHKB Professional Classic','Topre','Plastic','Standard','60%','true','Topre','PBT','Dye-sublimation','None');
INSERT INTO keyboards(name,switchType,caseType,pcbType,keyboardType,ergonomic,keycapsbrand,keycapsmaterial,keycapsprocess,backlight) VALUES ('Anne Pro 2','Kailh Box Red','Plastic','Bluetooth','60%','false','Obinskit','PBT','Double-shot','RGB');
