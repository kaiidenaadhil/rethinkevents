CREATE TABLE `projects` (
`projectId` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
`userId` INT  NOT NULL,
`projectName` VARCHAR(255)  NULL,
`projectType` VARCHAR(255)  NULL,
`status` ENUM('new', 'in_progress', 'completed', 'on_hold')  NOT NULL,
`budget` DECIMAL(12,2)  NULL,
`progress` INT  NULL CHECK (`progress` <= 100),
`deadline` TIMESTAMP  NULL,
`projectCreatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP,
`projectUpdatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`projectIdentify` VARCHAR(50)  NOT NULL,
FOREIGN KEY (`userId`) REFERENCES `users`(`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;