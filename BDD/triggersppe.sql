/* ICI ON MET LES TRIGGERS DE LA BDD */


Drop trigger if exists verifAge ;
Delimiter //
Create trigger verifAge
before insert on client 
for each row
Begin 
if year(curdate())-year(new.datenaiss)<18
	then
	signal sqlstate '45000'
	set message_text = 'La personne n est pas majeur';
end if;
END //
Delimiter ;

        
        
drop trigger if exists verifUpdate;
delimiter //
create trigger verifUpdate
after update on materiel
for each row
begin
insert into archivmateriel values (old.codeM,old.codeT_M,old.nom,old.notice,old.prix,old.poids,sysdate(),user(),"update");
end //
delimiter ;
