USE [IMSQuasar]
GO
    DECLARE @Cost INT = 0,
    @DriverId INT = NULL,
    @json VARCHAR(max) = '{"19":"300"}',
    @Date DATETIME = '2021-09-19 00:19' DECLARE @t TABLE (itemid INT, incount INT, type INT) DECLARE @updateTable TABLE (
        itemid INT,
        transfercount INT,
        warehousecount INT,
        result INT
    )
INSERT INTO
    @t
SELECT
    *
FROM
    Openjson(@json)
select
    *
from
    @t