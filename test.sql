Begin Tran  
Insert INTO tblStudents VALUES ('Kajal')  
SAVE Tran A;  
Insert INTO tblStudents VALUES ('Rahul')  
SAVE Tran B;  
Insert INTO tblStudents VALUES ('Ram')  
SAVE Tran C;  
  
SELECT * from tblStudents 
ROLLBACK TRAN B  
COMMIT  
