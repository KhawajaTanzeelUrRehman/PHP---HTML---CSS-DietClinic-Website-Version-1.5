insert into login (email,password,type) values ('tanzeel','tanzeel','admin');
insert into login (email,password,type) values ('obaid','abc12345','admin');
insert into login (email,password,type) values ('usman','usman','staff');
insert into login (email,password,type) values ('warda','warda','staff');
insert into login (email,password,type) values ('noman','noman','staff');
insert into login (email,password,type) values ('ishaam','ishaam','staff');
insert into login (email,password,type) values ('mahnoor','mahnoor','staff');



insert into admin (name,gender,phone,login_id) values ('Tanzeel Ur Rehman','male',03057225865,1);
insert into admin (name,gender,phone,login_id) values ('Obaid Ur Rehman','male',03328002182,2);

insert into employee (name,gender,phone,login_id) values ('Usman','male',null,3);
insert into employee (name,gender,phone,login_id) values ('Warda','female',null,4);
insert into employee (name,gender,phone,login_id) values ('Noman','male',null,5);
insert into employee (name,gender,phone,login_id) values ('Ishaam','female',null,6);
insert into employee (name,gender,phone,login_id) values ('Mahnoor','female',null,7);

ALTER  TABLE admin
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE body_measurements
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE client
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE employee
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE feedbacks
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE log
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE login
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE medical_diagnosis
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE package
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE payment
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE payment_approvals
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER  TABLE source
ADD Column CreatedOrModified timestamp
NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


