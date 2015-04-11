--Dar de alta usuario

create procedure regist_user (p_email varchar(50),p_password varchar(16))
procedimiento:begin
declare regs boolean;
set regs = (select count(*) from users where email=p_email);
if regs=true then
leave procedimiento;
end if;

insert into users(email,password)
values (p_email,p_password);
end procedimiento;

--Nº de fotos de un bosque registrado

delimiter |
create function n_photo (n_name varchar(50))
returns int
begin
declare n_p int;
set n_p = (select count(p.id) 
		   from photos p inner join forest f on f.id = p.id_forest 
		   where n_name=f.name);
return n_p;
end;

--Bosques (nombres) de un país

delimiter '@'
create function c_forest (c_country varchar(50))
returns varchar(60)
begin
declare f_name varchar(60);
set f_name = (select name from forest where c_country=country);
return f_name;
end;
@
delimiter ;
	
	
	
	
