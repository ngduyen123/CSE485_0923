CREATE TABLE `quanlythuvien`.`tacgia` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `tenTacGia` VARCHAR(255) NOT NULL ,
     PRIMARY KEY (`id`))
      ENGINE = InnoDB;
CREATE TABLE `quanlythuvien`.`sach` (
    `id` INT NOT NULL AUTO_INCREMENT ,
     `tenSach` VARCHAR(255) NOT NULL ,
      `namXuatBan` INT NOT NULL , 
      `idTacGia` INT NOT NULL , 
      PRIMARY KEY (`id`),
      ALTER TABLE `sach` ADD FOREIGN KEY (`idTacGia`) REFERENCES `tacgia`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
      ) 
      ENGINE = InnoDB;