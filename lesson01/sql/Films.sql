/*
Navicat PGSQL Data Transfer

Source Server         : local
Source Server Version : 90324
Source Host           : localhost:5432
Source Database       : OnlineCinema
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90324
File Encoding         : 65001

Date: 2018-09-30 23:03:41
*/


-- ----------------------------
-- Table structure for "public"."Films"
-- ----------------------------
DROP TABLE "public"."Films";
CREATE TABLE "public"."Films" (
"Film_Name" varchar(100) NOT NULL,
"Film_Year" numeric(4) NOT NULL,
"Film_Id" numeric(10) NOT NULL,
"Film_Author" numeric(10) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Films
-- ----------------------------
INSERT INTO "public"."Films" VALUES ('Odin doma 1', '1998', '1', '2');
INSERT INTO "public"."Films" VALUES ('Love', '2017', '2', '5');
INSERT INTO "public"."Films" VALUES ('Leto', '2012', '3', '4');
INSERT INTO "public"."Films" VALUES ('Love', '2005', '4', '1');
INSERT INTO "public"."Films" VALUES ('Avtovokzal', '1984', '5', '3');

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Uniques structure for table "public"."Films"
-- ----------------------------
ALTER TABLE "public"."Films" ADD UNIQUE ("Film_Id");
ALTER TABLE "public"."Films" ADD UNIQUE ("Film_Author");

-- ----------------------------
-- Primary Key structure for table "public"."Films"
-- ----------------------------
ALTER TABLE "public"."Films" ADD PRIMARY KEY ("Film_Id");

-- ----------------------------
-- Foreign Key structure for table "public"."Films"
-- ----------------------------
ALTER TABLE "public"."Films" ADD FOREIGN KEY ("Film_Id") REFERENCES "public"."FilmsGenres" ("Film_id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."Films" ADD FOREIGN KEY ("Film_Author") REFERENCES "public"."Authors" ("Author_id") ON DELETE CASCADE ON UPDATE CASCADE;
