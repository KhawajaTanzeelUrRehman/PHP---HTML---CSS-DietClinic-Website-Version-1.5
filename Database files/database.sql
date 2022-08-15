create table log(
entry_time datetime,
description varchar(1000),
changes_made_by varchar(50)
);
create table login  (
	login_id int auto_increment primary key,
    email varchar (30) unique,
	password varchar (300),
	type varchar (30)
);
create table admin (
	admin_id int primary key auto_increment,
    name varchar (30),
    gender varchar (10),
    phone varchar (20),
    login_id int,
    constraint admin_login_fk
		foreign key (login_id) references login(login_id)
);
create table employee (
	employee_id int primary key auto_increment,
    name varchar (30),
    gender varchar (10),
    phone varchar (20),
    login_id int,
    constraint emplyee_login_fk
		foreign key (login_id) references login(login_id)
);
create table client (
	client_id int primary key auto_increment,
	first_name varchar (30),
	last_name varchar (30),
    gender varchar (30),
	phone varchar(30),
	insta_id varchar(30),
	address varchar (300),
    city varchar (30),
    profession varchar (100),
    reference varchar (300),
    login_id int,
    comment varchar(1000),
    remarks int,
    followup int default 0,
    constraint client_login_fk
		foreign key (login_id) references login(login_id)
);

create table source(
platform varchar(30),
client_id int,
refer_client_id int,
source_name varchar(30),
constraint source_client1_fk
		foreign key (refer_client_id) references client(client_id),
constraint source_client2_fk
		foreign key (client_id) references client(client_id)
);

create table feedbacks(
	feedback_id int primary key auto_increment,
    description varchar(1000),
    client_id int,
	constraint feedback_client_fk
		foreign key (client_id) references client(client_id)
);
create table body_measurements(
	bm_no int primary key auto_increment,
    height int,
    current_weight int,    
    target_weight int,
    age int,
    right_thigh int,
    left_thigh int,    
    waist_above int,
    belly_button int,
    chest int,
    calves int,
    hips int,
    days int,
    client_id int,
    constraint bm_client_fk
		foreign key (client_id) references client(client_id)
);
create table medical_diagnosis(
	diagnosis_no int primary key auto_increment,
    food_choices varchar(300),
    current_medication varchar(300),
    food_allergies varchar(300),
    diseases varchar(300),
    get_up_time time,
    sleep_time time,
    physical_activity int,
    client_id int,
	constraint md_client_fk
		foreign key (client_id) references client(client_id)
);


 create table payment(
	payment_id int primary key auto_increment,
    amount int,
    payment_date datetime default now(),
    payment_method varchar(30)    
);
create table package (
	package_id int primary key auto_increment,
    client_id int,
    payment_id int,
    package_name varchar(300),
    package_date date,
    followup int default 0,
    info2 bool,
	constraint package_client_fk
		foreign key (client_id) references client(client_id),
	constraint package_payment_fk
		foreign key (payment_id) references payment(payment_id)
);

CREATE table payment_approvals( approval_id int AUTO_INCREMENT PRIMARY KEY,
 client_id int, amount int,
 payment_slip text,
 purpose varchar(30),
 payment_method varchar(30),
 phone varchar(30),
 insta_id varchar(30),
 status varchar(30),
 clienttype varchar(30),
 payment_date date ,
 remarks varchar(1000),
 payment_id int,
 constraint payment_approvals_client_fk
		foreign key (client_id) references client(client_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



delimiter //
CREATE TRIGGER tr_insert_admin 
AFTER INSERT ON admin FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted admin ID ", new.admin_id, " into admin table"), user());
END //


CREATE TRIGGER tr_insert_body_measurements
AFTER INSERT ON body_measurements FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted bm_no ", new.bm_no, " into body measurements table"), user());
END //

CREATE TRIGGER tr_insert_client
AFTER INSERT ON client FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted client ID ", new.client_id, " into Client table"), user());
END //

CREATE TRIGGER tr_insert_feedbacks
AFTER INSERT ON feedbacks FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted feedbacks with ID ", new.feedback_id, " into feedbacks table."), user());
END //


CREATE TRIGGER tr_insert_login
AFTER INSERT ON login FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted login id  ", new.login_id, " into login table."), user());
END //

CREATE TRIGGER tr_insert_medical_Diagnosis
AFTER INSERT ON medical_diagnosis FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted diagnosis ID ", new.diagnosis_no, " into medical diagnosis table."), user());
END //

CREATE TRIGGER tr_insert_payment
AFTER INSERT ON payment FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted payment ID ", new.payment_id, " into payment table."), user());
END //


CREATE TRIGGER tr_payment_appovals
AFTER INSERT ON payment_approvals FOR EACH ROW
BEGIN
	INSERT INTO log(entry_time, description, changes_made_by)
	VALUES (NOW(), concat("Inserted payment Approvals ID ", new.approval_id, " into payment_approvals table."), user());
END //

delimiter ;

