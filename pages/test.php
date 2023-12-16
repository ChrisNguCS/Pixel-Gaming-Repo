CREATE TABLE games (
 gameId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
 gameName varchar(128) NOT NULL,
 gameCredits int(11) NOT NULL,
 gameGamemode varchar(128) NOT NULL,
 gameTeamsize varchar(128) NOT NULL,
 gamePlayerCount int(11) NOT NULL,
 gameRegion varchar(128) NOT NULL,
 gameTime varchar(128) NOT NULL,
 PRIMARY KEY (gameId)
);
CREATE TABLE users (
 usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
 usersUid varchar(128) NOT NULL,
 usersEmail varchar(128) NOT NULL,
 usersPwd varchar(128) NOT NULL,
 PRIMARY KEY (usersId)
);