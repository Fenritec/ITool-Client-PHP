<?php

namespace FenritecEu\ItoolClientPhp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\CheckArray;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class V1DossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1Dossier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DosId', $data)) {
                $object->setDosId($data['DosId']);
                unset($data['DosId']);
            }
            if (\array_key_exists('designation', $data)) {
                $object->setDesignation($data['designation']);
                unset($data['designation']);
            }
            if (\array_key_exists('dateOuvertureExercice', $data)) {
                $object->setDateOuvertureExercice(\DateTime::createFromFormat('Y-m-d', $data['dateOuvertureExercice'])->setTime(0, 0, 0));
                unset($data['dateOuvertureExercice']);
            }
            if (\array_key_exists('dateFinExercice', $data)) {
                $object->setDateFinExercice(\DateTime::createFromFormat('Y-m-d', $data['dateFinExercice'])->setTime(0, 0, 0));
                unset($data['dateFinExercice']);
            }
            if (\array_key_exists('isCe', $data)) {
                $object->setIsCe($data['isCe']);
                unset($data['isCe']);
            }
            if (\array_key_exists('isCe2', $data)) {
                $object->setIsCe2($data['isCe2']);
                unset($data['isCe2']);
            }
            if (\array_key_exists('isCompta', $data)) {
                $object->setIsCompta($data['isCompta']);
                unset($data['isCompta']);
            }
            if (\array_key_exists('isFacto', $data)) {
                $object->setIsFacto($data['isFacto']);
                unset($data['isFacto']);
            }
            if (\array_key_exists('isAssurance', $data)) {
                $object->setIsAssurance($data['isAssurance']);
                unset($data['isAssurance']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['DosId'] = $object->getDosId();
            $data['designation'] = $object->getDesignation();
            $data['dateOuvertureExercice'] = $object->getDateOuvertureExercice()->format('Y-m-d');
            $data['dateFinExercice'] = $object->getDateFinExercice()->format('Y-m-d');
            $data['isCe'] = $object->getIsCe();
            if ($object->isInitialized('isCe2') && null !== $object->getIsCe2()) {
                $data['isCe2'] = $object->getIsCe2();
            }
            $data['isCompta'] = $object->getIsCompta();
            $data['isFacto'] = $object->getIsFacto();
            $data['isAssurance'] = $object->getIsAssurance();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1Dossier' => false];
        }
    }
} else {
    class V1DossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1Dossier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DosId', $data)) {
                $object->setDosId($data['DosId']);
                unset($data['DosId']);
            }
            if (\array_key_exists('designation', $data)) {
                $object->setDesignation($data['designation']);
                unset($data['designation']);
            }
            if (\array_key_exists('dateOuvertureExercice', $data)) {
                $object->setDateOuvertureExercice(\DateTime::createFromFormat('Y-m-d', $data['dateOuvertureExercice'])->setTime(0, 0, 0));
                unset($data['dateOuvertureExercice']);
            }
            if (\array_key_exists('dateFinExercice', $data)) {
                $object->setDateFinExercice(\DateTime::createFromFormat('Y-m-d', $data['dateFinExercice'])->setTime(0, 0, 0));
                unset($data['dateFinExercice']);
            }
            if (\array_key_exists('isCe', $data)) {
                $object->setIsCe($data['isCe']);
                unset($data['isCe']);
            }
            if (\array_key_exists('isCe2', $data)) {
                $object->setIsCe2($data['isCe2']);
                unset($data['isCe2']);
            }
            if (\array_key_exists('isCompta', $data)) {
                $object->setIsCompta($data['isCompta']);
                unset($data['isCompta']);
            }
            if (\array_key_exists('isFacto', $data)) {
                $object->setIsFacto($data['isFacto']);
                unset($data['isFacto']);
            }
            if (\array_key_exists('isAssurance', $data)) {
                $object->setIsAssurance($data['isAssurance']);
                unset($data['isAssurance']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['DosId'] = $object->getDosId();
            $data['designation'] = $object->getDesignation();
            $data['dateOuvertureExercice'] = $object->getDateOuvertureExercice()->format('Y-m-d');
            $data['dateFinExercice'] = $object->getDateFinExercice()->format('Y-m-d');
            $data['isCe'] = $object->getIsCe();
            if ($object->isInitialized('isCe2') && null !== $object->getIsCe2()) {
                $data['isCe2'] = $object->getIsCe2();
            }
            $data['isCompta'] = $object->getIsCompta();
            $data['isFacto'] = $object->getIsFacto();
            $data['isAssurance'] = $object->getIsAssurance();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1Dossier' => false];
        }
    }
}