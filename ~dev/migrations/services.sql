CREATE TABLE `services` (
`serviceId` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
`serviceTitle` VARCHAR(250)  NOT NULL,
`serviceCategory` INT  NOT NULL,
`serviceType` ENUM('Events', 'Printing', 'Interior', 'General')  NOT NULL,
`description` VARCHAR(1100)  NOT NULL,
`serviceImage` VARCHAR(255)  NOT NULL,
`serviceCreatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP,
`serviceUpdatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`serviceIdentify` VARCHAR(50)  NOT NULL,
FOREIGN KEY (`serviceCategory`) REFERENCES `service_categories`(`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;