CREATE TABLE timesheet2 (
    name varchar(256) not null , -- AUTO_INCREMENT
    yr varchar(30)  not null, 
    mth varchar(30)  not null,
    day1 varchar(256) ,
    day2 varchar(256) ,
    day3 varchar(256) ,
    day4 varchar(256) ,
    day5 varchar(256) ,
    day6 varchar(256) ,
    day7 varchar(256) ,
    day8 varchar(256) ,
    day9 varchar(256) ,
    day10 varchar(256) ,
    day11 varchar(256) ,
    day12 varchar(256) ,
    day13 varchar(256) ,
    day14 varchar(256) ,
    day15 varchar(256) ,
    day16 varchar(256) ,
    day17 varchar(256) ,
    day18 varchar(256) ,
    day19 varchar(256) ,
    day20 varchar(256) ,
    day21 varchar(256) ,
    day22 varchar(256) ,
    day23 varchar(256) ,
    day24 varchar(256) ,
    day25 varchar(256) ,
    day26 varchar(256) ,
    day27 varchar(256) ,
    day28 varchar(256) ,
    day29 varchar(256) ,
    day30 varchar(256) ,
    day31 varchar(256) ,

    PRIMARY KEY(name, yr, mth)


);


INSERT INTO timesheet2 (name, yr, mth) VALUES ('Andy', "2020", "June");
INSERT INTO timesheet2 (name, yr, mth) VALUES ('Bob', "2020", "June");
INSERT INTO timesheet2 (name, yr, mth) VALUES ('Carol', "2020", "June");